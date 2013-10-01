<?
//	SECTION
// Constant that allow access to the required files.
define("IDEA",1);
//	END SECTION
require_once("include/include.php");
if(!$_POST || !isset($_SESSION['logged_in'])){
	exit("Acesso negado");
}

if(!defined("SECURITY") || $_POST['s'] != SECURITY){
	exit("Token de acesso invalido");
}
mysql_query(
"INSERT INTO  `idea` (
`autor` ,
`autor_empresa` ,
`data` ,
`texto`
)
VALUES (
'".$_SESSION['profile_id']."', NULL , UNIX_TIMESTAMP(NOW()) ,  '".mysql_real_escape_string($_POST['i'])."'
);");
header("Location: profile.php?id=".mysql_insert_id());
?>
