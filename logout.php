<?
//	SECTION
// Constant that allow access to the required files.
define("IDEA",1);
//	END SECTION

require_once("include/include.php");

session_destroy();
header("Location: index.php");
?>