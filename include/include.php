<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<!-- MY CSS -->
	<link rel="stylesheet" type="text/css" href="share_it.css"/>
<!--  JQUERY PLUGIN -->
	<script type="text/javascript" language="javascript" src="javascript_css/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="javascript_css/jquery.dataTables.js"></script> 
	<script type="text/javascript" language="javascript" src="javascript_css/jquery-ui-1.8.4.custom.min.js"></script>
	<script type="text/javascript" src="javascript_css/jquery.form.js"></script> 
	<script type="text/javascript" language="javascript" src="js/coment.js"></script>
<?

 date_default_timezone_set("America/Sao_Paulo");
//	SECTION
//Checks if the file was included correctly.
if(!defined('IDEA'))

	exit;
//	END SECTION

//	SECTION
//Get the global constants (Mysql connection info and other usefull constants)
require_once("constants.php");
//	END SECTION

//	SECTION
//Connect to MySQL
mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
mysql_select_db(MYSQL_DB);

//	END SECTION

require_once("ideas.php");

//	SECTION
//Start session
session_name("idea_session");
session_start();
if(isset($_SESSION['s'])){
	define("SECURITY",$_SESSION['s']);
}
$_SESSION['s'] = uniqid(TRUE);
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
	$_USER_QUERY = mysql_query("SELECT * FROM `user` WHERE id = '".((int)$_SESSION['profile_id'])."'");
	$_USER = $_USER_QUERY ? mysql_fetch_array($_USER_QUERY) : false;

	$control_ideas = new Ideas();
}
//	END SECTION
?>
