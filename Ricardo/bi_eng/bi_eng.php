<? session_start();

global $id;
function bi_eng_js(){
	echo '<script type="text/javascript" language="javascript" src="bi_eng/bi_eng.js"></script>';
}
?>

<? function gera_id(){

	$ip = getenv("REMOTE_ADDR"); //linha que captura o ip do usuario.
	$ip_parts = explode(".", $ip);
	
	return implode($ip_parts).date("dmyHis");
	
}?>

<? function bi_eng(){ 
	$_SESSION['id'] = gera_id();
?>
	<form id="form_bi_eng">
		<table style="line-height:19px;">
			<tr><td colspan="3" width="20px">English L2 Grammar <input type="hidden" id="id" name="id" value="<?=$_SESSION['id'];?>"/></td></tr>
			<tr>
				<td valign="top">1.</td>
				<td>
					Date of birth: <br />
					<input type="text" style="width:100px;" maxlength="10" name="birth"> ( month / day / year )
				</td>
			</tr>
			<tr>
				<td valign="top">2.</td>
				<td>
					Sex: <br />
					<input type="radio" name="sex" value="Male"> Male <br />
					<input type="radio" name="sex" value="Female"> Female
				</td>
			</tr>
			<tr>
				<td valign="top">3.</td>
				<td>
					Where were you born?<br />
					<input type="text" style="width:250px;" name="born">
				</td>
			</tr>
			<tr>
				<td valign="top">4.</td>
				<td>
					Where do you live at present?<br />
					<input type="radio" name="live" value="Brazil" id="liv_brazil" /> In Brazil <br />
					<input type="radio" name="live" value="USA" id="liv_us" /> In United States of América
					
				</td>
			</tr>
			<tr>
				<td valign="top">5.</td>
				<td>
					Do you speak a language other than English?<br />
					<input type="radio" name="languages" value="yes" id="speak_other" /> Yes <br />
					<input type="radio" name="languages" value="no" id="speak_english" /> No
					
				</td>
			</tr>
			<tr id="yes_other" style="display: none;">
				<td></td> 
				<td>
					Besides English, which languages do you speak? <input type="text" id="others_languages" style="width:250px;" name="others_languages" value="None"> <br/><br>
					
					<b>If you speak more than one language besides English:</b> <br>Which is the language other than English you are more fluent in? <input type="text" id="others_languages_fluent" style="width:250px;" name="others_languages_fluent" value="None"> <br/>
					
				</td>
			</tr>
			<tr id="yes_other1" style="display: none;">
				<td valign="top">6.</td>
				<td>
					Your native language is<br />
					<input type="radio" id="natv_eng" name="lang" value="" > English. <br />
					<input type="radio" id="natv_other" name="lang" value=""> A language other then English.
				</td>
			</tr>
			<tr id="ntv_and_eng1" style="display: none;">
				<td></td> 
				<td>
					What is your native language? <input type="text" id="nativ_lang" style="width:250px;" name="lang" value="English">
				</td>
			</tr>
			<tr id="evaluate_skill" style="display: none;">
				<td valign="top" id="yes_other2" style="display: none;">7.</td> 
				<td valign="top" id="no_just_eng" style="display: none;">6.</td> 
				<td id="eng_skill1">
					How do you evaluate your level in following language skills?</td>
				</td>
				<td id="ntv_and_eng2" style="display: none;">
					How do you evaluate your level in following language skills in your native language and in English?</td>
				</td>
			</tr>
			<tr id="ntv_and_eng3" style="display: none;">
				<td></td>
				<td>
				<b>In English</b>
				</td>
				<td id="ntv_eng">
				<b>In the other language you know or <br> the other language you know best</b>
				</td>
				<td id="ntv_other" style="display: none;">
				<b>In my native language (if not English)</b>
				</td>
			</tr>
			<tr id="evaluate_skills1" style="display: none;">
				<td></td>
				<td>
					Speaking:  <br>
					<input type="radio" name="speaking_eng" value="Little"> Little capacity<br>
					<input type="radio" name="speaking_eng" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="speaking_eng" value="High"> High capacity<br>
					<input type="radio" name="speaking_eng" value="Full"> Full capacity<br>
				</td>
				<td id="yes_other3" style="display: none;">
					Speaking: <input id="hid_speak" type="hidden" name="speaking" value="None"> <br>
					<input type="radio" name="speaking" value="Little"> Little capacity<br>
					<input type="radio" name="speaking" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="speaking" value="High"> High capacity<br>
					<input id="speak" type="radio" name="speaking" value="Full"> Full capacity
					
				</td>
			</tr>
			<tr id="evaluate_skills2" style="display: none;">
				<td></td>
				<td>
					Listening:  <br>
					<input type="radio" name="listening_eng" value="Little"> Little capacity<br>
					<input type="radio" name="listening_eng" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="listening_eng" value="High"> High capacity<br>
					<input type="radio" name="listening_eng" value="Full"> Full capacity<br>
				</td>
				<td id="yes_other4" style="display: none;">
					Listening: <input id="hid_list" type="hidden" name="listening" value="None"> <br>
					<input type="radio" name="listening" value="Little"> Little capacity<br>
					<input type="radio" name="listening" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="listening" value="High"> High capacity<br>
					<input type="radio" id="list" name="listening" value="Full"> Full capacity
					
				</td>
			</tr>
			<tr id="evaluate_skills3" style="display: none;">
				<td></td>
				<td>
					Reading:  <br>
					<input type="radio" name="reading_eng" value="Little"> Little capacity<br>
					<input type="radio" name="reading_eng" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="reading_eng" value="High"> High capacity<br>
					<input type="radio" name="reading_eng" value="Full"> Full capacity<br>
				</td>
				<td  id="yes_other5" style="display: none;">
					Reading: <input type="hidden" name="reading" value="None"> <br>
					<input type="radio" name="reading" value="Little"> Little capacity<br>
					<input type="radio" name="reading" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="reading" value="High"> High capacity<br>
					<input type="radio" id="read" name="reading" value="Full"> Full capacity
					
				</td>
			</tr>
			<tr id="evaluate_skills4" style="display: none;">
				<td></td>
				<td>
					Writing:  <br>
					<input type="radio" name="writing_eng" value="Little"> Little capacity<br>
					<input type="radio" name="writing_eng" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="writing_eng" value="High"> High capacity<br>
					<input type="radio" name="writing_eng" value="Full"> Full capacity<br>
				</td>
				<td  id="yes_other6" style="display: none;">
					Writing:<input type="hidden" name="writing" value="None">  <br>
					<input type="radio" name="writing" value="Little"> Little capacity<br>
					<input type="radio" name="writing" value="Moderate"> Moderate capacity<br>
					<input type="radio" name="writing" value="High"> High capacity<br>
					<input type="radio" id="write" name="writing" value="Full"> Full capacity<br>
				</td>
			</tr>
			<tr id="native_other1" style="display: none;">
				<td valign="top">8.</td>
				<td>
					When did you start learning English (year)? <br />
					<input type="text" style="width:40px;" name="start_learning" value="None"> 
				</td>
			</tr>
			<tr id="native_other2" style="display: none;">
				<td valign="top">9.</td>
				<td>
					You have been using English for some type of communication in your everyday life for <br/>
					<input type="text" style="width:25px;"  maxlength="2" name="everyday_years"  value="None"> years / 
					<input type="text" style="width:25px;"  maxlength="2" name="everyday_months"  value="None"> months.
				</td>
			</tr>
			<tr id="native_other3" style="display: none;">
				<td valign="top">10.</td>
				<td>
					In your current everyday life, over a seven-day week you use English (oral or written) for about<br />
					<input type="text" style="width:25px;" maxlength="3" name="week_percent"  value="None"> % of your usual activities.
				</td>
			</tr>
			<tr id="native_other4" style="display: none;">
				<td valign="top">11.</td>
				<td>
					How frequently do you use your native language and English while doing the following activities?</td>
				</td>
			</tr>
			<tr id="ntv_and_eng9" style="display: none;">
				<td></td>
				<td>
					<b>English</b>
				</td>
				<td>
					<b>Native language</b>
				</td>
			</tr>
			<tr id="native_other5" style="display: none;">
				<td></td>
				<td>
					Working: <input type="hidden" name="working_eng" value="None"> <br>
					<input type="radio" name="working_eng" value="Very"> Very often<br>
					<input type="radio" name="working_eng" value="Often"> Often<br>
					<input type="radio" name="working_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="working_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="working_eng" value="Never"> Never<br>
				</td>
				<td>
					Working:<input type="hidden" name="working" value="None">  <br>
					<input type="radio" id="work" name="working" value="Very"> Very often<br>
					<input type="radio" name="working" value="Often"> Often<br>
					<input type="radio" name="working" value="Sometimes"> Sometimes<br>
					<input type="radio" name="working" value="Rarely"> Rarely<br>
					<input type="radio" name="working" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other6" style="display: none;">
				<td></td>
				<td>
					Reading for your studies: <input type="hidden" name="reading_for_studies_eng" value="None"> <br>
					<input type="radio" name="reading_for_studies_eng" value="Very"> Very often<br>
					<input type="radio" name="reading_for_studies_eng" value="Often"> Often<br>
					<input type="radio" name="reading_for_studies_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="reading_for_studies_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="reading_for_studies_eng" value="Never"> Never<br>
				</td>
				<td>
					Reading for your studies: <input type="hidden" name="reading_for_studies" value="None"> <br>
					<input type="radio" id="stud" name="reading_for_studies" value="Very"> Very often<br>
					<input type="radio" name="reading_for_studies" value="Often"> Often<br>
					<input type="radio" name="reading_for_studies" value="Sometimes"> Sometimes<br>
					<input type="radio" name="reading_for_studies" value="Rarely"> Rarely<br>
					<input type="radio" name="reading_for_studies" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other7" style="display: none;">
				<td></td>
				<td>
					Writing school papers: <input type="hidden" name="writing_papers_eng" value="None"> <br>
					<input type="radio" name="writing_papers_eng" value="Very"> Very often<br>
					<input type="radio" name="writing_papers_eng" value="Often"> Often<br>
					<input type="radio" name="writing_papers_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="writing_papers_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="writing_papers_eng" value="Never"> Never<br>
				</td>
				<td>
					Writing school papers: <input type="hidden" name="writing_papers" value="None"> <br>
					<input type="radio" id="school" name="writing_papers" value="Very"> Very often<br>
					<input type="radio" name="writing_papers" value="Often"> Often<br>
					<input type="radio" name="writing_papers" value="Sometimes"> Sometimes<br>
					<input type="radio" name="writing_papers" value="Rarely"> Rarely<br>
					<input type="radio" name="writing_papers" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other8" style="display: none;">
				<td></td>
				<td>
					Reading for pleasure: <input type="hidden" name="reading_pleasure_eng" value="None"> <br>
					<input type="radio" name="reading_pleasure_eng" value="Very"> Very often<br>
					<input type="radio" name="reading_pleasure_eng" value="Often"> Often<br>
					<input type="radio" name="reading_pleasure_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="reading_pleasure_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="reading_pleasure_eng" value="Never"> Never<br>
				</td>
				<td>
					Reading for pleasure: <input type="hidden" name="reading_pleasure" value="None"> <br>
					<input type="radio" id="pleasure" name="reading_pleasure" value="Very"> Very often<br>
					<input type="radio" name="reading_pleasure" value="Often"> Often<br>
					<input type="radio" name="reading_pleasure" value="Sometimes"> Sometimes<br>
					<input type="radio" name="reading_pleasure" value="Rarely"> Rarely<br>
					<input type="radio" name="reading_pleasure" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other9" style="display: none;">
				<td></td>
				<td>
					Talking to friends or family: <input type="hidden" name="talking_eng" value="None"> <br>
					<input type="radio" name="talking_eng" value="Very"> Very often<br>
					<input type="radio" name="talking_eng" value="Often"> Often<br>
					<input type="radio" name="talking_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="talking_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="talking_eng" value="Never"> Never<br>
				</td>
				<td>
					Talking to friends or family: <input type="hidden" name="talking" value="None"> <br>
					<input type="radio" id="talk" name="talking" value="Very"> Very often<br>
					<input type="radio" name="talking" value="Often"> Often<br>
					<input type="radio" name="talking" value="Sometimes"> Sometimes<br>
					<input type="radio" name="talking" value="Rarely"> Rarely<br>
					<input type="radio" name="talking" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other10" style="display: none;">
				<td></td>
				<td>
					Participating of social clubs, churches, religious or community groups: <input type="hidden" name="groups_eng" value="None"> <br>
					<input type="radio" name="groups_eng" value="Very"> Very often<br>
					<input type="radio" name="groups_eng" value="Often"> Often<br>
					<input type="radio" name="groups_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="groups_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="groups_eng" value="Never"> Never<br>
				</td>
				<td>
					Participating of social clubs, churches, religious or community groups: <input type="hidden" name="groups" value="None"> <br>
					<input type="radio" id="groups" name="groups" value="Very"> Very often<br>
					<input type="radio" name="groups" value="Often"> Often<br>
					<input type="radio" name="groups" value="Sometimes"> Sometimes<br>
					<input type="radio" name="groups" value="Rarely"> Rarely<br>
					<input type="radio" name="groups" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other11" style="display: none;">
				<td></td>
				<td>
					Surfing the Internet: <input type="hidden" name="internet_eng" value="None"> <br>
					<input type="radio" name="internet_eng" value="Very"> Very often<br>
					<input type="radio" name="internet_eng" value="Often"> Often<br>
					<input type="radio" name="internet_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="internet_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="internet_eng" value="Never"> Never<br>
				</td>
				<td>
					Surfing the Internet: <input type="hidden" name="internet" value="None"> <br>
					<input type="radio" id="net" name="internet" value="Very"> Very often<br>

					<input type="radio" name="internet" value="Often"> Often<br>
					<input type="radio" name="internet" value="Sometimes"> Sometimes<br>
					<input type="radio" name="internet" value="Rarely"> Rarely<br>
					<input type="radio" name="internet" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other12" style="display: none;">
				<td></td>
				<td>
					Playing electronic games: <input type="hidden" name="game_eng" value="None"> <br>
					<input type="radio" name="game_eng" value="Very"> Very often<br>
					<input type="radio" name="game_eng" value="Often"> Often<br>
					<input type="radio" name="game_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="game_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="game_eng" value="Never"> Never<br>
				</td>
				<td>
					Playing electronic games: <input type="hidden" name="game" value="None"> <br>
					<input type="radio" id="games" name="game" value="Very"> Very often<br>
					<input type="radio" name="game" value="Often"> Often<br>
					<input type="radio" name="game" value="Sometimes"> Sometimes<br>
					<input type="radio" name="game" value="Rarely"> Rarely<br>
					<input type="radio" name="game" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other13" style="display: none;">
				<td></td>
				<td>
					Watching movies or TV shows: <input type="hidden" name="tv_eng" value="None"> <br>
					<input type="radio" name="tv_eng" value="Very"> Very often<br>
					<input type="radio" name="tv_eng" value="Often"> Often<br>
					<input type="radio" name="tv_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="tv_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="tv_eng" value="Never"> Never<br>
				</td>
				<td>
					Watching movies or TV shows: <input type="hidden" name="tv" value="None"> <br>
					<input type="radio" id="tv" name="tv" value="Very"> Very often<br>
					<input type="radio" name="tv" value="Often"> Often<br>
					<input type="radio" name="tv" value="Sometimes"> Sometimes<br>
					<input type="radio" name="tv" value="Rarely"> Rarely<br>
					<input type="radio" name="tv" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other14" style="display: none;">
				<td></td>
				<td>
					Listening to songs: <input type="hidden" name="songs_eng" value="None"> <br>
					<input type="radio" name="songs_eng" value="Very"> Very often<br>
					<input type="radio" name="songs_eng" value="Often"> Often<br>
					<input type="radio" name="songs_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="songs_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="songs_eng" value="Never"> Never<br>
				</td>
				<td>
					Listening to songs: <input type="hidden" name="songs" value="None"> <br>
					<input type="radio" id="song" name="songs" value="Very"> Very often<br>
					<input type="radio" name="songs" value="Often"> Often<br>
					<input type="radio" name="songs" value="Sometimes"> Sometimes<br>
					<input type="radio" name="songs" value="Rarely"> Rarely<br>
					<input type="radio" name="songs" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other15" style="display: none;">
				<td></td>
				<td>
					Writing personal emails, chat messages or texting friends or family: <input type="hidden" name="emails_eng" value="None"> <br>
					<input type="radio" name="emails_eng" value="Very"> Very often<br>
					<input type="radio" name="emails_eng" value="Often"> Often<br>
					<input type="radio" name="emails_eng" value="Sometimes"> Sometimes<br>
					<input type="radio" name="emails_eng" value="Rarely"> Rarely<br>
					<input type="radio" name="emails_eng" value="Never"> Never<br>
				</td>
				<td>
					Writing personal emails, chat messages or texting friends or family: <input type="hidden" name="emails" value="None"> <br>
					<input type="radio" id="email" name="emails" value="Very"> Very often<br>
					<input type="radio" name="emails" value="Often"> Often<br>
					<input type="radio" name="emails" value="Sometimes"> Sometimes<br>
					<input type="radio" name="emails" value="Rarely"> Rarely<br>
					<input type="radio" name="emails" value="Never"> Never<br>
				</td>
			</tr>
			<tr id="native_other16" style="display: none;"><input type="hidden" name="lived_abroad" value="None">
				<td valign="top" id="live" style="display: none;">12.</td>
				<td id="live_us1" style="display: none;">
					How long have you lived in the United States? <input type="text" id="long_lived" style="width:250px;" name="long_lived_us" value="None">
				</td>
				<td id="live_other1" style="display: none;">
					Have you lived in an English speaking country? <br />
					<input type="radio" name="lived_abroad" value="yes" id="abroad_yes" /> yes <br />
					<input type="radio" name="lived_abroad" value="no" id="abroad_no" /> no
				</td>
			</tr>
			<tr id="answer_abroad_long" style="display: none;">
				<td valign="top">13.</td>
				<td>
					How long have you been living -- or did you stay as a visitor -- in an English speaking country?<br />
					<input type="text" style="width:25px;"  maxlength="2" name="abroad_years" value="None"> years / 
					<input type="text" style="width:25px;"  maxlength="2" name="abroad_months" value="None"> months.
				</td>
			</tr>
			<tr id="answer_abroad_percent" style="display: none;">
				<td valign="top">14.</td>
				<td>
					In the English speaking country where you live -- or where you stayed -- what percentage of your time in which you use -- or used -- English? <br />
					<input type="text" style="width:25px;"  maxlength="3" name="abroad_percent"  value="None">% of my time.
				</td>
			</tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td><input type="submit" value="Start experiment" /></td></tr>
		</table>
	</form>
	<div id="exp" style="display:none;" >
		<table>
			<tr>
				<td>
					<center>
						<h2>
							<a href="http://www.psicolinguistica.org" target="_blank"><?=TEXT_RUN_LABPSICO ?></a> - 
							<a href="http://www.webexp2go.com" target="_blank"><?=TEXT_RUN_WEBEXP2GO ?></a>
						</h2>
						<APPLET code="client.ExperimentClient.class" width="750" height="550" align="top" archive="./release/webexp2.jar">
							<script type="text/javascript"> document.write("<param name='browser' value='"+navigator.userAgent+"'>"); </script>
							<param id="param_redirect" name="redirect" value="http://webexp2go.com/webexp_thanks.php?eid=<?=$_SESSION['id']?>&">
							<param id="param_bouncer" name='bouncer' value="">
							<param name="experimenter" value="webexp2go">
							<param name="experiment" value="bi_eng">
							<param name="port" value="6789">
							<param name="LANG" value="UTF-8">
							<param name="feedback" value="true"/>
							<alt="Java disabled!"><i><?=TEXT_ERROJAVA?> <a href="http://www.java.com">http://www.java.com</a></i>
						</APPLET>
					</center>
				</td>
			</tr>
		</table>
	</div>
<? } ?>
<? function form_submit(){
	$string = implode(";", $_POST);
	$myFile = "/var/www/release/data/webexp2go/bi_eng/results/dados/";
	$fh = fopen($myFile . $_POST["id"], 'a') or die(print_r (error_get_last())); 
	fwrite($fh, $string.";");
	fclose($fh);
 } ?>
 

