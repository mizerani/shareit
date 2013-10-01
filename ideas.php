<?

class Ideas{

	function create_it(){
		if(!$_POST || !isset($_SESSION['logged_in'])){
			exit("Acesso negado");
		}
		
		if(!defined("SECURITY") || $_POST['s'] != SECURITY){
			exit("Token de acesso invalido");
		}
		
		mysql_query("INSERT INTO  `idea` (`autor` ,`autor_empresa` ,`data` ,`texto`)
				VALUES ('".$_SESSION['profile_id']."', NULL , UNIX_TIMESTAMP(NOW()) ,  '".mysql_real_escape_string($_POST['i'])."');");
	}

	function print_it($ideas, $n_ideas){
		$count = 0;
		while($idea = mysql_fetch_array($ideas))
		{
			//Idéias e seus patrocinadores
			if($_POST && isset($_POST['like']) && $_POST['like'] == SECURITY && $_POST['id_idea'] == $idea['id']){
				mysql_query("	INSERT INTO  `like_idea` (`user`,`idea`,`data`)
						VALUES ('".$_SESSION['profile_id']."', '".$idea['id']."'  , UNIX_TIMESTAMP(NOW()));");
			}
	
			if($_POST && isset($_POST['unlike']) && $_POST['unlike'] == SECURITY && $_POST['id_idea'] == $idea['id']){
				mysql_query("	DELETE FROM `like_idea`  
						WHERE user = '".$_SESSION['profile_id']."' AND idea = '".$idea['id']."';");
			}

			$sponsor = mysql_query("SELECT count(*) as likes FROM like_idea WHERE idea='".$idea['id']."'");
			$n_sponsors= mysql_fetch_array($sponsor);
			$i_spons = mysql_query("SELECT * FROM like_idea WHERE idea='".$idea['id']."' and user = '".$_SESSION['profile_id']."'");	
			echo 	'<div name=idea_'.$idea['id'].'>
					<table>
					
						<tr>
							<td>
								<span id = "name">'.$idea['name'].',</span>
							 	<span id = "date"> '.date("r",$idea['data']).'</span>
							</td>
						</tr>
						<tr>
							<td>
								<div class = "ideatx">
									<form method="post">
										'.$idea['texto'].'
										<input type="hidden" name="id_idea" value="'.$idea['id'].'">';
		
									if(mysql_num_rows($i_spons)){
	
										echo '<input id="spons" type="image" src="images/icons/decline.png" alt="Despatrocinar" /> 
										<input type="hidden" name="unlike" value="'.$_SESSION['s'].'">
									</form>';} else { echo '
										<input id="spons" type="image" src="images/icons/accept.png" alt="Patrocinar" /> 
										<input type="hidden" name="like" value="'.$_SESSION['s'].'">
									</form>';}
									
					$opinions = mysql_query("SELECT count(*) as num FROM `comment`,`user` WHERE `comment`.autor=`user`.id AND idea = '".$idea['id']."'");
					$n_opinions = mysql_fetch_array($opinions);				
					echo '	
								<div width="50" height = "50">
									<img src="images/idea.jpg" alt="Should show Your Image" width="50" height = "50">
								</div>
								</div>
							</td>
						</tr>
						<tr>	
							<td>
								<form method="post">
									Patrocinado por '.$n_sponsors['likes'].' pessoa(s) - 
									<span id="show'.$idea['id'].'">
										'.$n_opinions['num'].' Opiniões
									</span>
									<span id="hide'.$idea['id'].'" style="display:none;">
										Ocultar opiniões
									</span>
											
									<input type="checkbox" id="showit'.$idea['id'].'" value ="'.$idea['id'].'" onclick="show_it(value)"><br>
											
								</form>
							
							</td>
							';
								 
	
			//Comentários e seus patrocinadores
					echo		'</td>
						</tr>
						<tr>
							<td>
								<div id="cidea_'.$idea['id'].'" style="display:none;">';
					$coments = mysql_query("SELECT * FROM `comment`,`user` WHERE `comment`.autor=`user`.id AND idea = '".$idea['id']."'");
					while($coment_ifo = mysql_fetch_array($coments)){
						if($_POST && isset($_POST['like_c']) && $_POST['like_c'] == SECURITY && $_POST['cid'] == $coment_ifo[0]){
							mysql_query("	INSERT INTO  `like_comment` (`user`,`comment`,`data`)
									VALUES ('".$_SESSION['profile_id']."', '".((int) $_POST['cid'])."'  , UNIX_TIMESTAMP(NOW()));");
						}
	
						if($_POST && isset($_POST['unlike_c']) && $_POST['unlike_c'] == SECURITY && $_POST['cid'] == $coment_ifo[0]){
							mysql_query("	DELETE FROM `like_comment` 
									WHERE user = '".$_SESSION['profile_id']."' AND comment = '".((int) $_POST['cid'])."';");
						}
	
						$c_sponsor = mysql_query("SELECT count(*) as likes FROM like_comment WHERE comment='".((int) $coment_ifo[0])."'");
						$nc_sponsors= mysql_fetch_array($c_sponsor);
	
									echo '<pre>'.htmlentities($coment_ifo['texto']).'</pre>'.
									date("r",$coment_ifo['data']).' por '.$coment_ifo['nome'].'
									<form method="post">'
										.$nc_sponsors['likes'].' pessoa(s) Patrocinaram isso.
										<!--input type="hidden" name="id_coment" value="'.$idea['id'].'"-->';
		
						$i_spons = mysql_query("SELECT * FROM like_comment WHERE comment='".((int) $coment_ifo[0])."' and user = '".$_SESSION['profile_id']."'");
						if(mysql_num_rows($i_spons)){
		
										echo '<input type="submit" value="Despatrocinar" /> 
										<input type="hidden" name="unlike_c" value="'.$_SESSION['s'].'">
										<input type="hidden" name="cid" value="'.$coment_ifo[0].'">
									</form>';
						 } else { echo '
										<input type="submit" value="Patrocinar" /> 
										<input type="hidden" name="like_c" value="'.$_SESSION['s'].'">
										<input type="hidden" name="cid" value="'.$coment_ifo[0].'">
									</form>';
					 	}
					} 
		
			echo 
					'			</div>
							</td>
						</tr>
							
						</tr>';
						
			echo 			'<tr>
							<td>
								Opine: 
							</td>
						</tr>';
					echo	'<tr>
							<td>
								<form method="post">
									<table>
										<tr>
											<td>
												<input type="text" style="width:400px;" name="c">
											</td>
											<td>
												<input type="hidden" name="s" value="'.$_SESSION['s'].'">
											</td>
											<td>
												<input type="submit" value="Publicar" /> 
											</td>
										</tr>
									</table>
								</form>
							</td>
					</table>	

	
				</div> <br><br>'
			;

			//cotrola o numero de idéias q irão aparecer			
			$count++;
			if($count >= $n_ideas) break;
		}

	}
}
?>
