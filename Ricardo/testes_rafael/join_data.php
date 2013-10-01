<?php
//general variables
$_SESSION['stringcsv'] = "";
$_SESSION['temp'] = "";
$_SESSION['slide'] = "";
$_SESSION['getdata'] = false;
$_SESSION['getdatamag'] = false;
$_SESSION['gabarito'] = array(array());
$_SESSION['stage'] = "";
$_SESSION['magnitude_on'] = false;


function le_gabarito()
{
	//variables
	$data = "";
	$slide = "";
	$id = "";
	$answer = "";
	
	$file = fopen("/var/www/release/data/webexp2go/bi_eng/results/gabarito1", "r")
	or die(print_r (error_get_last()));
	
	while(!feof($file))
	{
		$char = fgetc($file);
		if($char == "#") break;
		
		//find slide
		while($char != ":")
		{
			$data .= $char;
			$char = fgetc($file);
		}
		
		//find option
		do
		{
			$id = $char;
			$char = fgetc($file);
		}
		while($char != ".");
		
		//ignore some characters
		while($char != ">") $char = fgetc($file);
		
		$char = fgetc($file);
		$char = fgetc($file);
		
		//find answer
		while($char != "*")
		{
			$answer .= $char;
			$char = fgetc($file);
		}
		
		$char = fgetc($file);
		
		if(strcmp($slide, $data))
		{
			$slide = $data;
		}
		
		//save data
		$_SESSION['gabarito'][$slide][$id] = $answer;

		//clean variables
		$data = "";
		$answer = "";
		$id = "";
	}

}

//Function to use at the start of an element
function start($parser,$element_name,$element_attrs)
{

   	static $element;
   	
   	//Get the stage
   	if($element_name=="STAGE") $_SESSION['stage'] = $element_attrs['NAME'];
   	
   	if(strcmp($_SESSION['stage'], "Practice"))
   	{
		//Get the slide where the text was typed
   		if($element_name=="DISPLAY.SLIDE") $_SESSION['slide'] = $element_attrs['NAME'];

	   	//Get the type of text diplayed
	   	if($element_name=="DISPLAY.TEXTRESPONSE") $element = $element_attrs['NAME'];

		if($_SESSION['magnitude_on'] && $element_name=="INPUTSTART")
		{ 
			$_SESSION['getdatamag'] = true;
			$element = "inputStart";
		}
		
		if($_SESSION['temp'] == "libera_time" && $element == "inputStart")
		{
			$element = "time";
			$_SESSION['temp'] = "";
		}
	}
    
    	if($element=="input1" | $element=="name" | $element=="email")
    	{ 
      		//If the type is correct and the next data are the text. Free the access
      		switch($element_name)
      		{
         		case "TEXT":
         		$_SESSION['getdata'] = true;
         		$element = "vazio";
		}
	}
	else if(($element=="time" | $element=="itemRating"))
	{
		switch($element_name)
      		{
         		case "TEXT":
         		$_SESSION['getdatamag'] = true;
         		$element = "vazio";
         		
         		case "TIME":
         		$_SESSION['getdatamag'] = true;
         		$element = "vazio";
		}
	}
}

//Function to use at the end of an element
function stop($parser,$element_name)
{
	if($_SESSION['getdata'] == true)
    	{
     		//if the text box wasn't filled it recive 0
     		if($_SESSION['temp']=="") $_SESSION['temp'] = "0";    
     		
     		//fill the string
     		$_SESSION['stringcsv'] .= $_SESSION['temp'];
     		$_SESSION['temp'] = "";
       		
       		$_SESSION['getdata'] = false;
       		
       		if(!strcmp($_SESSION['slide'], "User details"))
    		{
			$_SESSION['stringcsv'] .= ";";    		
    		}
    	}
	
	if($_SESSION['getdatamag'])
    	{
    		$_SESSION['getdatamag'] = false;
    		if($element_name=="TIMESTAMP")
    		{
    			$_SESSION['temp'] = "libera_time";
    		}
    		else
    		{
    			$_SESSION['stringcsv'] .= $_SESSION['temp'] . ";";
    			$_SESSION['temp'] = "";
    		}
    		
    		
    	}
	
	//close data at and of each slide
    	if($element_name == "DISPLAY.SLIDE" && strcmp($_SESSION['slide'], "User details") && strcmp($_SESSION['stage'], "Practice") && !$_SESSION['magnitude_on'])
    	{
    		$_SESSION['stringcsv'] .= $_SESSION['temp'] . ";";
    		$_SESSION['temp'] = "";
    	}
    	
    	if(!strcmp($_SESSION['stage'], "Practice")) $_SESSION['magnitude_on'] = true;
}

//Function to use when finding character data
function char($parser,$data)
{ 
    	if($_SESSION['getdata'] == true)
    	{ 
    		if(!strcmp($_SESSION['slide'], "User details"))
    		{
			$_SESSION['temp'] .= $data;    		
    		}
    		else if(!strcmp($_SESSION['gabarito'][$_SESSION['slide']][$data], "[No_answer]"))
       			$_SESSION['temp'] .= '0';
       		else
       			$_SESSION['temp'] .= '1';
    	}
    	if($_SESSION['getdatamag'])
    	{
    		$_SESSION['temp'] .= $data;
    	}
}

function save_data()
{
	$exp_id = $_GET['eid'];
	$results_exp = "bi_eng" . $_GET['?saveid'] . ".xml";
	
	
	$file_csv = "/var/www/release/data/webexp2go/bi_eng/results/dados/" . $exp_id;
	$file_xml = "/var/www/release/data/webexp2go/bi_eng/results/" . $results_exp;

	$file = fopen($file_xml, "r")
	or die(print_r (error_get_last()));


	//Initialize the XML parser
  	$parser=xml_parser_create();

  	//Specify element handler
  	xml_set_element_handler($parser,"start","stop");

  	//Specify data handler
  	xml_set_character_data_handler($parser,"char");

  	//Parse the file
  	while($data=fread($file,1024))
    	{  

       		xml_parse($parser,$data,feof($file)) or
       		die (sprintf("XML Error: %s at line %d",
		xml_error_string(xml_get_error_code($parser)),
		xml_get_current_line_number($parser)));
	}
	  
  	//Close the XML file
  	fclose($file);
  
	//Free the XML parser
	xml_parser_free($parser);
	
	$filecsv = fopen($file_csv, "a")
	or die(print_r (error_get_last()));
	fwrite($filecsv, $_SESSION['stringcsv']);
	//Close the CSV File
	fclose($filecsv);
}
?>

<?
function cria_csv()
{
	$string = "";
	$new_file = false;
	
	$files = array();

	foreach (new DirectoryIterator('./release/data/webexp2go/bi_eng/results/dados/') as $item)
	{
    		if ($item->isFile())
    		{
        		$files[filemtime($item->getPathname())] = $item->getFilename();
    		}
	}

	ksort($files);
	
	$files = array_values($files);
	
	//print_r($files);
	
	$last_file = fopen("/var/www/release/data/webexp2go/bi_eng/results/last_file", "r")
	or die(print_r (error_get_last()));
	
	$last = fread($last_file, "24");
	
	fclose($last_file);
	
	$files_data = scandir("/var/www/release/data/webexp2go/bi_eng/results/dados/");
	$length = count($files_data);
	
	if(!strcmp("", $last)) $new_file = true;
	
	if(strcmp($files[$length-3], $last))
	{
		for($i = 0; $i < $length-2; $i = $i+1)
		{
			if($new_file)
			{
				$data = fopen("/var/www/release/data/webexp2go/bi_eng/results/dados/" . $files[$i], "r")
				or die(print_r (error_get_last()));
				$string .= fgets($data)  . "\n";
				fclose($data);
			}
			
			if(!strcmp($files[$i], $last)) $new_file = true;
		}
		$last_file = fopen("/var/www/release/data/webexp2go/bi_eng/results/last_file", "w")
		or die(print_r (error_get_last()));
	
		fwrite($last_file, $files[$length-3]);
	
		fclose($last_file);	
	}
	fclose($files_data);
	
	if($new_file)
	{
		$filecsv = fopen("/var/www/release/data/webexp2go/bi_eng/results/result.csv", "a")
		or die(print_r (error_get_last()));
	
		fwrite($filecsv, $string);
	
		fclose($filecsv);
	}
	
?>
<script type="text/javascript">
$(document).ready(function() {

  /* basic usage */
  $('.download').jDownload();
  
  /* custom settings */
  $('.download').jDownload({
    event : 'hover',
    dialogWidth : 300,
    dialogHeight : 150
  });
  
});
</script>

<p><a href="/release/data/webexp2go/bi_eng/results/result.csv" class="download" title="Results bi_eng">Download CSV HERE!</a></p>
	
<?
}
?>
