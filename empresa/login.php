<?
//	SECTION
// Constant that allow access to the required files.
define("IDEA",1);
//	END SECTION
require_once("include/include.php");

if(!$_POST || isset($_SESSION['logged_in'])){
	exit("Acesso negado");
}

if(!defined("SECURITY") || $_POST['s'] != SECURITY){
	exit("Token de acesso invalido");
}
$q = mysql_query($qru = "SELECT * FROM `empresa` WHERE login='".mysql_real_escape_string($_POST['login'])."' AND pass = UNHEX(SHA1(CONCAT(salt,'".mysql_real_escape_string($_POST['p'])."')))");
if(mysql_num_rows($q) == 0){
	exit("Dados invalidos");
}
$f = mysql_fetch_array($q);
$_SESSION['logged_in'] = true;
$_SESSION['profile_id'] = $f['id'];

header("Location: profile_business.php?id=".$_SESSION['profile_id']);

?>
