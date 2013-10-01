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
if($_GET['id'] == $_SESSION['profile_id']){
?>

<!--Main div-->
<div class = 'head' align = "center">
	<table>
		<tr>
			<td>
				<img src="images/idea.jpg" alt="Should show Your Image" width="100" height = "100" align = "center"><br>
				<p class = "switch" id="show_profile" align = "center">Mostrar Perfil</p>
				<p class = "switch" id="show_initial" style="display:none;" align = "center">Página inicial</p>
			</td>
			<td><h2>Ol&aacute; <?=$_USER['nome'];?>,</h2></td>
			<td>
				<form method="post" action="newidea.php">
					<input type="text" style="width:400px;" name="i">
					<input type="hidden" name="s" value="<?=$_SESSION['s'];?>">
					<input type="submit" value="Enviar" /> 
				</form>
			</td>
			<td>
				<a href="logout.php?<?=uniqid();?>">Sair</a>
				<br>
			</td>
		</tr>
	</table>
	
</div>
<? 
}else{
	$USER_QUERY = mysql_query("SELECT * FROM `user` WHERE id = '".((int)$_GET['id'])."'");
	$USER = $USER_QUERY ? mysql_fetch_array($USER_QUERY) : false;
	
 ?>
Perfil de <?=$_USER['nome'];?>
<br><br>
Aqui vai aparecer as ideias desse usuario.
<br><br>
<a href="profile.php?id=<?=$_SESSION['profile_id'];?>">Meu Perfil</a><br>

<? } ?>


<!--Last ideas-->
<div id = 'feed' style="display:none;" align = "center">
	<? 
		echo '<h2>Veja o que temos de novo por ai! =)</h2><br><br>';

		$ideas_all = mysql_query("	SELECT  idea.texto, idea.id, idea.data, user.nome as name
						FROM  idea JOIN user ON idea.autor = user.id
						ORDER BY data DESC");

		$control_ideas->print_it($ideas_all, 5);
	?>
</div>

<div id="profile"  align = "center">
<!--Better ranked Ideas-->
	<div class = 'best' align = "center">
		<? 
			echo '<h2>Como andam suas preferidas? Dê uma olhada:</h2><br>';
	
			$ideas = mysql_query("	SELECT  texto, idea.id, idea.data, count(like_idea.idea) as n_spons
					FROM  idea JOIN like_idea ON idea.id = like_idea.idea JOIN empresa ON idea.autor_empresa = empresa.id
					WHERE autor_empresa = '".$_SESSION['profile_id']."'AND empresa.id = '".$_SESSION['profile_id']."' AND empresa.admin = idea.autor
					GROUP BY like_idea.idea
					ORDER BY n_spons DESC");
			
	
			$control_ideas->print_it($ideas_all, 5);
		?>
	</div>

	<!--My ideas div-->
	<div class = 'mine' align = "center">
		<? 
			$q2 = mysql_query("SELECT nome FROM `user` WHERE id = '".$_SESSION['profile_id']."'");
			$_AUTOR = mysql_fetch_array($q2);
	
			echo '<h2>Confira como vão as suas idéias:</h2><br>';
	
			$ideas_all = mysql_query("	SELECT  texto, idea.id, idea.data, count(like_idea.idea) as n_spons, user.nome as name
					FROM  idea JOIN like_idea ON idea.id = like_idea.idea JOIN empresa ON idea.autor_empresa = empresa.id
					WHERE autor_empresa = '".$_SESSION['profile_id']."'AND empresa.id = '".$_SESSION['profile_id']."' AND empresa.admin != idea.autor
					GROUP BY like_idea.idea
					ORDER BY n_spons DESC");
			
			$control_ideas->print_it($ideas, 5);
		?>
	</div>
	
</div>
