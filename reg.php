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
if($_POST['i'] != "IDEA14"){
	exit("Convite invalido");
}
if(strlen($_POST['p1']) < 6){
	exit("Senha muito curta");	
}
if($_POST['p1'] != $_POST['p2']){
	exit("Senhas nao batem");	
}
$q = mysql_query("SELECT * FROM `user` WHERE email = '".mysql_real_escape_string($_POST['e'])."'");
if(mysql_num_rows($q)){
	exit("Ja existe registro nesse email");
}
$salt = sha1(uniqid(),true);
$pass = sha1($salt.$_POST['p1'],true);
$q = mysql_query("INSERT INTO `idea`.`user` (`email`, `nome`,`salt`,`pass`) VALUES ('".mysql_real_escape_string($_POST['e'])."', '".mysql_real_escape_string($_POST['n'])."',0x".bin2hex($salt).",0x".bin2hex($pass).");");

$_SESSION['logged_in'] = true;
$_SESSION['profile_id'] = mysql_insert_id();

header("Location: profile.php?id=".$_SESSION['profile_id']);
?>