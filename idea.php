<?
//	SECTION
// Constant that allow access to the required files.
define("IDEA",1);
//	END SECTION
require_once("include/include.php");
if(!isset($_SESSION['logged_in'])){
	header("Location: index.php");
	exit;
}
if($_POST && isset($_POST['c']) && $_POST['s'] == SECURITY){
mysql_query(
"INSERT INTO  `comment` (
`idea`,
`autor` ,
`autor_empresa` ,
`data` ,
`texto`
)
VALUES (
'".((int) $_GET['id'])."',
'".$_SESSION['profile_id']."', NULL , UNIX_TIMESTAMP(NOW()) ,  '".mysql_real_escape_string($_POST['c'])."'
);");
}
if($_POST && isset($_POST['like_c']) && $_POST['like_c'] == SECURITY){
	mysql_query(
"INSERT INTO  `like_comment` (
`user`,
`comment`,
`data`
)
VALUES (
'".$_SESSION['profile_id']."', '".((int) $_POST['cid'])."'  , UNIX_TIMESTAMP(NOW())
);");
}
if($_POST && isset($_POST['like']) && $_POST['like'] == SECURITY){
	mysql_query(
"INSERT INTO  `like_idea` (
`user`,
`idea`,
`data`
)
VALUES (
'".$_SESSION['profile_id']."', '".((int) $_GET['id'])."'  , UNIX_TIMESTAMP(NOW())
);");
}
if($_POST && isset($_POST['unlike']) && $_POST['unlike'] == SECURITY){
	mysql_query(
"DELETE FROM `like_idea`  WHERE user = '".$_SESSION['profile_id']."' AND idea = '".((int) $_GET['id'])."';");
}
if($_POST && isset($_POST['unlike_c']) && $_POST['unlike_c'] == SECURITY){
	mysql_query(
"DELETE FROM `like_comment` WHERE user = '".$_SESSION['profile_id']."' AND comment = '".((int) $_POST['cid'])."';");
}
$q = mysql_query("SELECT * FROM idea WHERE id='".((int) $_GET['id'])."'");
$f = mysql_fetch_array($q);
$q2 = mysql_query("SELECT nome FROM `user` WHERE id = '".$f['autor']."'");
$_AUTOR = mysql_fetch_array($q2);
$likes = mysql_query("SELECT count(*) as likes FROM like_idea WHERE idea='".((int) $_GET['id'])."'");
$flike= mysql_fetch_array($likes);
?>
Ideia de <?=$_AUTOR['nome'];?>
<pre>
<?=htmlentities($f['texto']);?>
</pre>
Postado em <?=date("r",$f['data']);?>
<form method="post">
<?=$flike['likes'];?> pessoa(s) Patrocinaram isso.
<?
$ff = mysql_query("SELECT * FROM like_idea WHERE idea='".((int) $_GET['id'])."' and user = '".$_SESSION['profile_id']."'");
if(mysql_num_rows($ff)){
?>
<input type="submit" value="Despatrocinar" /> 
<input type="hidden" name="unlike" value="<?=$_SESSION['s'];?>">
</form>
<? } else { ?>
<input type="submit" value="Patrocinar" /> 
<input type="hidden" name="like" value="<?=$_SESSION['s'];?>">
</form>
<? } ?>
Coment&aacute;rios: <br>
<?
$q3 = mysql_query("SELECT * FROM `comment`,`user` WHERE `comment`.autor=`user`.id AND idea = '".((int) $_GET['id'])."'");
while($fe = mysql_fetch_array($q3)){
	$likes = mysql_query("SELECT count(*) as likes FROM like_comment WHERE comment='".((int) $fe[0])."'");
$flike= mysql_fetch_array($likes);
?>
<pre>
<?=htmlentities($fe['texto']);?>
</pre>
Postado em <?=date("r",$fe['data']);?> por <?=$fe['nome'];?>
<form method="post">
<?=$flike['likes'];?> pessoa(s) Patrocinaram isso.
<?
$ff = mysql_query("SELECT * FROM like_comment WHERE comment='".((int) $fe[0])."' and user = '".$_SESSION['profile_id']."'");
if(mysql_num_rows($ff)){
?>
<input type="submit" value="Despatrocinar" /> 
<input type="hidden" name="unlike_c" value="<?=$_SESSION['s'];?>">
<input type="hidden" name="cid" value="<?=$fe[0];?>">
</form>
<? } else { ?>
<input type="submit" value="Patrocinar" /> 
<input type="hidden" name="like_c" value="<?=$_SESSION['s'];?>">
<input type="hidden" name="cid" value="<?=$fe[0];?>">
</form>
<? } ?>
	<?
}
?>
<form method="post">
<textarea name="c">
</textarea>
<input type="hidden" name="s" value="<?=$_SESSION['s'];?>">
<br>
<input type="submit" value="Enviar" /> 
</form>
