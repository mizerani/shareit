<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<? require_once("questionary_forms.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <title><?=WebExp2GO?></title>
    <link rel="shortcut icon" href="<?=IMAGES?>favicon.png" />
    <!-- CSS -->
		
		<link rel="stylesheet" type="text/css" href="javascript_css/css_reset-fonts-grids.css">
    <link rel="stylesheet" type="text/css" href="javascript_css/css_base.css">
    <link rel="stylesheet" type="text/css" href="javascript_css/jquery-ui-1.8.4.custom.css" />	
    <link rel="stylesheet" type="text/css" href="javascript_css/validationEngine.jquery.css" media="screen" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="javascript/jWizard.base.css" />
		<link rel="stylesheet" href="javascript_css/jquery.jDownload.css" />


		
		<!--  JQUERY PLUGIN -->
    <script type="text/javascript" language="javascript" src="javascript_css/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.validate.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.history.js"></script>
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.dataTables.js"></script> 
    <script type="text/javascript" language="javascript" src="javascript_css/jquery-ui-1.8.4.custom.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.jeditable.min.js"></script>        
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.validationEngine-en.js" ></script>
    <script type="text/javascript" language="javascript" src="javascript_css/jquery.validationEngine.js" ></script>
		<script type="text/javascript" language="javascript" src="javascript_css/jquery.jWizard.min.js"></script>   
		
		<script type="text/javascript" src="javascript_css/jquery.form.js"></script> 
    <script type="text/javascript" src="javascript_css/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="javascript_css/jquery-ui-1.8.4.custom.min.js"></script> 
    <script type="text/javascript" src="javascript_css/jquery.form.wizard-3.0.0.min.js"></script> 
		<script type="text/javascript" src="javascript_css/jquery.jDownload.min.js"></script>
		
		
		
		<!-- MY CSS -->
		<link rel="stylesheet" type="text/css" href="css_we2go.css"/>
		
		<!-- MY JS -->
		<?=bi_eng_js();?>
		
    
  </head>

  <body>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-16645459-1']);
      _gaq.push(['_trackPageview']);

      (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <div id="doc3" class="yui-t2">

      <div id="hd">
        <!-- PUT MASTHEAD CODE HERE -->
        <div id="head" style="padding-bottom: 60px;">
          <a class="logo"></a>
					<div class="head" style="padding-top: 55px;">Experiment survey</div>
        </div>
      </div>
      
      <div id="bd">
        
        <div id="yui-main">
          <div class="yui-b">
            <div id="content"><?=bi_eng();?></div>
          </div>
        </div>
        
        <div class="yui-b">
          <!-- PUT SECONDATY COLUMN CODE HERE -->
            <div id="login"></div>
            <div id="left"></div>
            <div></div>
        </div>
      </div>
      
      
      </div>
    <div id="ft">
        <!-- PUT FOOTER CODE HERE -->
        <div id="footer" style="">
          <div class="footer_links">
            <div align="center">
              <a href="#m=home" class="footerlink"><?=Home?></a>  |
              <a href="#m=testimonials" class="footerlink"><?=Users_testimonials?></a>  |
              <a href="#m=methods" class="footerlink"><?=Methods_of_development?></a>  |
              <a href="#m=opportunities" class="footerlink"><?=Opportunities?></a>  |
              <a href="#m=currentevents" class="footerlink"><?=Current_events?></a>  |
              <a href="#m=contact" class="footerlink"><?=Contact_us?></a>
            </div>  
          </div>      
          <div class="footer_copyrights"><div align="center">&copy; <?=TEXT_COPYRIGHTS?></div></div>
        </div>
    </div>
  
  </body>

  </html>
