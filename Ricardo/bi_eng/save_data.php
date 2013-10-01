<?
	$string = implode(";", $_POST);
	print_r($string);
	$myFile = "data.csv";
	$fh = fopen($myFile, 'a') or die("can't open file"); 
	fwrite($fh, $string."\n");
	fclose($fh);
	header("location: http://www.webexp2go.com/#final_thanks");
?>
