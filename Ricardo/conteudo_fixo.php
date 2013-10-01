<? // OK ?>
<?php function menu(){ ?>
    
    <? $permissoes_menu = permissoes_menu(); ?>
    
    <div class="left_menu_area">
      <div >
        <a href="#m=load_lang&lang=PT"><img id="lang_pt" src="<?=ICONS.'.pt.png';?>"></a>
        <a href="#m=load_lang&lang=EN"><img id="lang_en" src="<?=ICONS.'.en.png';?>"></a>
        <?if($permissoes_menu["lang_editor"]) {?> 
          <a href="#m=load_lang&lang=PI"><img id="lang_pi" src="<?=ICONS.'pirate.png';?>"></a>
        <? }?>
        <a href="#" class="left_menu_space"></a><br />
        <div class="left_menutop"></div>
        <a href="#m=home" class="left_menu"><?=Home?></a><br />
        <a href="#m=testimonials" class="left_menu"><?=Users_testimonials?></a><br />
        <a href="#m=methods" class="left_menu"><?=Methods_of_development?></a><br />
        <a href="#m=opportunities" class="left_menu"><?=Opportunities?></a><br />
        <a href="#m=currentevents" class="left_menu"><?=Current_events?></a><br />
        <a href="#m=contact" class="left_menu"><?=Contact_us?></a><br />
        <a href="#" class="left_menu_space"></a><br />
		
			<?php if($permissoes_menu["user"]){ ?> 
				<div class="left_menutop"></div>
				<a href="#m=exp_new_edit" class="left_menu"><?=New_experiment?></a><br />
				<a href="#m=myexp" class="left_menu"><?=My_experiments?></a><br />
				<a href="#" class="left_menu_space"></a><br />
			<?php } ?>
			
			<?php if($permissoes_menu["admin"]){ ?>
				<div class="left_menutop"></div>
				<a href="#m=exp_admin" class="left_menu"><?=Experiments_admin?></a><br />
				<a href="#m=user_admin" class="left_menu"><?=Users_admin?></a><br />
				<a href="#" class="left_menu_space"></a><br />
			<?php } ?>
			
			<?php if($permissoes_menu["admin"]){ ?>
				<div class="left_menutop"></div>
				<a href="#m=home" class="left_menu"><?=Home_admin?></a><br />
				<a href="#m=eventsadmin" class="left_menu"><?=Events_admin?></a><br />
				<a href="#m=linksadmin" class="left_menu"><?=Links_admin?></a><br />
				<a href="#m=commentsadmin" class="left_menu"><?=Comments_admin?></a><br />
				<a href="#m=testimonialsadmin" class="left_menu"><?=Testimonials_admin?></a><br />
				<a href="#" class="left_menu_space"></a><br />
			<?php } ?>
			
			<?php if($permissoes_menu["lang_editor"]){ ?>
				<div class="left_menutop"></div>
				<?php if($permissoes_menu["admin"]){ ?>
					<a href="#m=newconstant" class="left_menu"><?=New_constant?></a><br />
				<?php } ?>
				<a href="#m=constant_value_association" class="left_menu"><?=Value_association?></a><br />
				<a href="#m=constant_text_association" class="left_menu"><?=Text_association?></a><br />
				<a href="#m=createlangfile" class="left_menu"><?=Create_language_file?></a><br />
				<a href="#" class="left_menu_space"></a><br />
			<?php } ?>
                  
			<a href="#" class="left_menu_space"></a><br />
        </div>
        <br /><br />
    </div>
    
<?php } ?>
<?php function home(){ ?>
  <div class="body_textarea">
    <div class="head"><?=TEXT_HOME_HEAD?></div>
	  <div align="justify">
      <?=TEXT_HOME_CONTENT?><br />
      <?=TEXT_JAVA_REQUIREMENTS." ".LINK_JAVA_DOWNLOAD?><br />
      <?=TEXT_BROWSER_REQUIREMENTS." ".ICONS_BROWSER_SUPPORT?><br />
    </div>
  </div>
<?php } ?>
<?php function go2(){ ?>
  <div class="body_textarea">
    <div class="head"><?=TEXT_2GO_HEAD?></div>
    <div align="justify">
      <?=TEXT_2GO_CONTENT?>
    </div>
  </div>
<?php } ?>
<?php function projects(){ ?> 
  <div class="body_textarea">
    <div class="head"><?=TEXT_PROJECTS_HEAD?></div>
    <div class="innerbanner_head"><div align="justify"><?=TEXT_PROJECTS_SUBJECT_1?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_PROJECTS_CONTENT_1?></div></div>	
    <div class="innerbanner_head"><div align="justify"><?=TEXT_PROJECTS_SUBJECT_2?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_PROJECTS_CONTENT_2?></div></div>	
    <div class="innerbanner_head"><div align="justify"><?=TEXT_PROJECTS_SUBJECT_3?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_PROJECTS_CONTENT_3?></div></div>	
    <div class="innerbanner_head"><div align="justify"><?=TEXT_PROJECTS_SUBJECT_4?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_PROJECTS_CONTENT_4?></div></div>	
  </div>
<?php } ?>
<?php function aboutus(){ ?>
  <div class="body_textarea">
    <div class="head"><?=TEXT_ABOUT_US_HEAD?></div>
	
		<div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_DON_JEBER_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_DON_JEBER?></div><br />
    
    <div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_MARIA_LUIZA_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_MARIA_LUIZA?></div><br />
    
    <div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_RODRIGO_BARBOSA_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_RODRIGO_BARBOSA?></div><br />
    
    <div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_BRUNA_AMARAL_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_BRUNA_AMARAL?></div><br />
    
    <div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_JEFFERSON_MAIA_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_JEFFERSON_MAIA?></div><br />
    
    <div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_CINARA_DINIZ_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_CINARA_DINIZ?></div><br />
    
		<div align="justify" class="innerbanner_head2"><?=TEXT_ABOUT_US_LAB_TITLE?></div>
		<div align="justify"><?=TEXT_ABOUT_US_LAB?></div><br />
		
	</div>	
<?php } ?>
<?php function methods(){ ?>
  <div class="body_textarea">
    <div class="head"><?=TEXT_METHODS_HEAD?></div>
    <div class="innerbanner_head"><div align="justify"><?=TEXT_METHODS_SUBJECT_1?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_METHODS_CONTENT_1.LINK_METHODS_CONTENT_1?></div></div>	
    <div class="innerbanner_head"><div align="justify"><?=TEXT_METHODS_SUBJECT_2?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_METHODS_CONTENT_2?></div></div>		
    <div class="innerbanner_head"><div align="justify"><?=TEXT_METHODS_SUBJECT_3?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_METHODS_CONTENT_3?></div></div>			
  </div>
<?php } ?>
<?php function opportunities(){ ?>
  <div class="body_textarea">
    <div class="head"><?=TEXT_OPPORTUNITIES_HEAD?></div>
    <div class="innerbanner_head"><div align="justify"><?=TEXT_OPPORTUNITIES_SUBJECT?></div></div>
    <div class="innerbanner"><div align="justify"><?=TEXT_OPPORTUNITIES_CONTENT?></div></div>	
  </div>
<?php } ?>
<?php function currentevents(){ ?>    
  <div class="body_textarea">   
    <div class="head"><?=TEXT_CURRENT_EVENTS_HEAD?></div>    
    <?php 
      global $db;

      $sql = "SELECT date, subject, text FROM events WHERE visible = 1 ORDER BY date DESC;";
      $data = $db->get_results($sql);
      if($data)
      foreach($data as $row){
        echo '<div class="innerbanner">';
        echo '<div align="left" class="eventdate">On '.date("d/m/Y",strtotime($row->date)).',</div> <br /> <br />
            <div class="eventsubject">'.$row->subject.'</div><br /><br />';
        echo '<div align="left">'.$row->text.'</div>';
        echo '</div>';		
      }
    ?>    
  </div>
<?php } ?>
<?php function donate(){ ?>
  <br />
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="8E9B8B6PN6DP2">
    <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
  </form>
  <br />
<? } ?>


<? /* FORMS */ ?>
<?php function form_helpus() {
  extract(check_input_values($_POST));
	$to = TO_EMAIL_CONTACT;
  $headers = 'From: '.$name.' <'.$email.'> ';
  $subject = TEXT_HELPUS_EMAIL_SUBJECT;
  send_mail($to, $subject, $message, $headers);
	$_SESSION["msg"][] = MESSAGE_HELPUS_OK;
}?>
<?php function helpus(){?> 
  <table><tr><td>
    <form id="form_helpus">
    <div id="fieldWrapper" style="padding: 15px;"> 
				<span class="step" id="first"> 
					<span class="head"><?=TEXT_HELPUS_HEAD?></span>
          <p><?=TEXT_HELPUS_CONTENT?></p>
					<table>
						<tr>
							<td align="right"><label for="name"><?=Name?>:</label></td>
							<td><input id="name" name="name" type="text" class="contactfeild" style="width:231px" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="email"><?=Email?>:</label></td>
							<td><input id="email" name="email" type="text" class="contactfeild"  style="width:231px"  value="" /><br /></td>
						</tr>
						<tr>
							<td align="right" valign="top"><label><?=TEXT_HELPUS_FIELD_MESSAGE?></label></td>
							<td><textarea name="message" style="width:231px" rows="4"  class="contactfeild002" id="message"></textarea></td>
						</tr>
					</table>
				</span> 
				<div id="demoNavigation" style="text-align: right;"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" /> 
					<input class="navigation_button" id="next" value="Next" type="submit" /> 
				</div> 
			</div>
    </form>
	</td></tr></table>
  <a href="#m=projects"><?=TEXT_HELPUS_FOOTER?></a><br /><br />
<?php } ?>

<?php function form_testimonials(){
	global $db;
	extract(check_input_values($_POST));
	$date = date("Y-m-d");
	
  $sql = "INSERT INTO testimonials (name, email, message, date, visible)";
	$sql .= "VALUES ('$name', '$email','$message','$date', 0)";
	$db->query($sql);
		
	$to = TO_EMAIL_CONTACT;
	$headers = FROM_EMAIL_SYSTEM;
	$subject = TEXT_NEWSLETTER_EMAIL_SUBJECT;
		
	send_mail($to, $subject, $message, $headers);
		
	$_SESSION["msg"][] = MESSAGE_TESTIMONIAL_NEW_OK;
  
}?>
<?php function testimonials(){ ?>
  <table><tr><td>
	<form id="form_testimonials">
    <div id="fieldWrapper" style="padding: 15px;"> 
				<span class="step" id="first"> 
					<span class="head"><?=TEXT_TESTIMONIALS_HEAD?></span>
          <p><?=TEXT_TESTIMONIALS_CONTENT?></p>
					<table>
						<tr>
							<td align="right"><label for="name"><?=Name?>:</label></td>
							<td><input id="name" name="name" type="text" class="contactfeild" style="width:231px" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="email"><?=Email?>:</label></td>
							<td><input id="email" name="email" type="text" class="contactfeild"  style="width:231px"  value="" /><br /></td>
						</tr>
						<tr>
							<td align="right" valign="top"><label><?=TEXT_TESTIMONIALS_FIELD_MESSAGE?></label></td>
							<td><textarea name="message" style="width:231px" rows="4"  class="contactfeild002" id="message"></textarea></td>
						</tr>
					</table>
				</span> 
				<div id="demoNavigation" style="text-align: right;"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" /> 
					<input class="navigation_button" id="next" value="Next" type="submit" /> 
				</div> 
			</div>
    </form>
	</td></tr></table>
  <div class="body_textarea">
    <div class="testimonial_head"><div class="head"><?=TEXT_TESTIMONIALS_SUBJECT?></div></div>
    <?php
      global $db;
      $sql = "SELECT message, name FROM testimonials WHERE visible = 1";
      $data = $db->get_results($sql);
      if($data)
      foreach($data as $row){
        echo '<div class="body_textarea" >';
        echo '<div align="right">'.$row->message.'<br />-- '.$row->name.'</div>';
        echo '</div>';
      }
    ?>
  </div>
<?php } ?>

<?php function form_contact(){
	global $db;
	extract(check_input_values($_POST));
	$to = TO_EMAIL_CONTACT;
	$headers = 'From: '.$name.' <'.$email.'> ';
	$subject = TEXT_CONTACT_EMAIL_SUBJECT;
	send_mail($to, $subject, $message, $headers);
	$_SESSION["msg"][] = MESSAGE_CONTACT_OK;
}?>
<?php function contact(){ ?>
  <table><tr><td>
    <form id="form_contact">
      <div id="fieldWrapper" style="padding: 15px;"> 
				<span class="step" id="first"> 
					<span class="head"><?=TEXT_CONTACT_HEAD?></span><br /> 
					<table>
						<tr>
							<td align="right"><label for="name"><?=Name?>:</label></td>
							<td><input id="name" name="name" type="text" class="contactfeild" style="width:231px" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="email"><?=Email?>:</label></td>
							<td><input id="email" name="email" type="text" class="contactfeild"  style="width:231px"  value="" /><br /></td>
						</tr>
						<tr>
							<td align="right" valign="top"><label><?=Message?>:</label></td>
							<td><textarea name="message" style="width:231px" rows="4"  class="contactfeild002" id="message"></textarea></td>
						</tr>
					</table>
				</span> 
				<div id="demoNavigation" style="text-align: right;"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" /> 
					<input class="navigation_button" id="next" value="Next" type="submit" /> 
				</div> 
			</div>
    </form>
	</td></tr></table>
<?php } ?>

<?php function signup_to_sql() {
		global $db;
		extract($_POST);
		$email = str_replace(" ","",$email);
		$pass = md5($_pass1);
		$date = date("Y-m-d");
		$birth = table2mysql($birth);
		
		$sql = "INSERT INTO users (
					name, birthdate, gender, address, zip, state_province,
					country, institution, institution_address, department,
					position, tel, email, password, start, permission, 
					newsletter
				)";
		
		$sql .= "VALUES (
					'$name', '$birth', '$gender', '$address','$zip_code','$state_province',
					'$country', '$institution', '$institution_address', '$department', 
					'$position', '$tel', '$email','$pass', '$date', '1;', 1
				)";
		//echo $sql;
		$db->query($sql);
		mkdir("experiments/". $db->insert_id);
		
		send_mail(FROM_EMAIL_CONTACT, TEXT_SIGNUP_EMAIL_SUBJECT, "", "From: ".$name." <".$email.">");	
		$_SESSION["msg"][] = MESSAGE_SIGNUP_SUCCESS;
		unset($_POST);

}?>
<?php function signup(){ ?>
  <table><tr><td>
    <form id="form_signup">
      <div id="fieldWrapper" style="padding: 15px;"> 
				<span class="step" id="first"> 
					<span class="head"><?=Sign_up_now?></span><br /> 
					<table>
						<tr>
							<td align="right"><label for="name"><?=Name?>:</label></td>
							<td><input id="name" name="name" type="text" class="contactfeild" style="width:231px" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Birth_date?>:</label></td>
							<td><input name="birth" type="text" class="contactfeild" id="birth"  value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Gender?>:</label></td>
							<td>
								<input id="gender_male" type="radio" name="gender" class="contactfeild" value="M" /> <?=Male?>
								<input id="gender_female" type="radio" name="gender" class="contactfeild" value="F" /> <?=Female?> 
							</td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Address?>:</label></td>
							<td><input name="address" type="text" class="contactfeild" id="address" size="40" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Zip_code?>:</label></td>
							<td><input name="zip_code" type="text" class="contactfeild" id="zip_code" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Country?>:</label></td>
							<td><input name="country" type="text" class="contactfeild" id="country" value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=State_province?>:</label></td>
							<td><input name="state_province" type="text" class="contactfeild" id="state_province" value="" /></td>
						</tr>
					</table>
					</span>
				</span>
				<span class="step" id="second"> 
					<span class="head"><?=Sign_up_now?></span><br /> 
					<table>
						<tr>
							<td align="right"><label for="name"><?=Institution?>:</label></td>
							<td><input name="institution" type="text" class="contactfeild" id="institution" size="40"  value="" /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Institution_address?>:</label></td>
							<td><input name="institution_address" type="text" class="contactfeild" id="institution_address" size="40" value=""  /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Department?>:</label></td>
							<td><input name="department" type="text" class="contactfeild" id="department" value=""  /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Position?>:</label></td>
							<td><input name="position" type="text" class="contactfeild" id="position" value=""  /></td>
						</tr>
						<tr>
							<td align="right"><label for="name"><?=Phone?>:</label></td>
							<td><input name="tel" type="text" class="contactfeild" id="tel" size="10" value=""  /></td>
						</tr>
					</table>
				</span>
			</span>
			<span class="step" id="last"> 
				<span class="head"><?=Sign_up_now?></span><br /> 
				<table>
					<tr>
						<td align="right"><label for="email"><?=Email?>:</label></td>
						<td><input name="email" type="text" class="contactfeild" id="email" value=""  /><br /></td>
					</tr>
					<tr>
						<td align="right"><label for="email"><?=Password?>:</label></td>
						<td><input name="pass1" type="password" class="contactfeild" id="pass1" /></td>
					</tr>
					<tr>
						<td align="right"><label for="email"><?=Retype_password?>:</label></td>
						<td><input name="pass2" type="password" class="contactfeild" id="pass2" /></td>
					</tr>
				</table>
			</span> 
				<div id="demoNavigation" style="text-align: right;"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" /> 
					<input class="navigation_button" id="next" value="Next" type="submit" /> 
				</div> 
			</div>
    </form>
	</td></tr></table>
<?php } ?>




<? //NOT TESTED ?>

<?php function Links(){ ?>
	<div class="comments_area">	
		<div class="newletter_head"><?=TEXT_LINKS_HEAD?></div>
		<div class="comments_text">
			<?php
				global $db;
				$sql = "SELECT date, subject, id, link FROM links WHERE visible = 1 ORDER BY date DESC;";
				$data = $db->get_results($sql);
				if($data)
				foreach($data as $row){
					echo '<div  align="left" ><a href="'.$row->link.'" target="_blank" class="advancesearch">'.$row->subject.'</a></div><br />';
				}
			?>
		</div>
	</div>
<?php } ?>
<?php function events(){ ?>
    <div class="left_menu_area">
        <div class="events_head"><?=TEXT_EVENTS_HEAD?></div>
        <?php 
			global $db;
			$sql = "SELECT date, subject, id FROM events WHERE visible = 1 ORDER BY date DESC;";
			$data = $db->get_results($sql);
			if($data)
			foreach($data as $row){
				echo '<div class="comments_text">';
				  echo '<div align="left">On '.date("d/m/Y",strtotime($row->date)).'  <br />';
					echo '  <a href="#m=currentevents&id='.$row->id.'" class="advancesearch">'.$row->subject.'</a>';
				  echo '</div>';
				echo '</div>';	
			}			
		?>
    </div>
<?php } ?>
<?php function comments(){ ?>
	<div class="left_menu_area">
        <div class="comment_head" align="right"><?=TEXT_COMMENTS_HEAD?></div>
        <div class="comments_text" align="right"><?=LINK_COMMENTS?></div>	
        <?php 
			global $db;
			$sql = "SELECT name, date, message FROM comments WHERE visible = 1 ORDER BY date DESC;";
			$data = $db->get_results($sql);
			foreach($data as $row){
				echo '<div class="comments_text">';
				  echo '<div align="right">'.$row->name.' - '.date("d/m/Y",strtotime($row->date)).'<br />'.$row->message.'</div>';
				echo '</div>';					
			}
		?>   
    </div>
<?php } ?>
<?php function services(){ ?>
	<div class="left_menu_area">
    <div class="Services_head">
      <div align="right"><?=Services?></div>
    </div>
    <div class="comments_text">
      <div align="right"><?=Coming_soon?><br /><br />
        <a href="#" class="advancesearch"><?=TEXT_SERVICES?></a>
      </div>
    </div>
  </div>
<?php } ?>
<?php function soon(){ ?>
	<div class="head"><?=TEXT_SOON_HEAD?></div>
	<div class="body_textarea"><div align="justify"><?=TEXT_SOON_CONTENT?></div></div>
<?php } ?>
<?php function finalthanks(){ ?>
	<div class="head">Obrigado, Thanks, Dank, Grazie, Gracias...  </div>
	<div class="body_textarea" align="justify">
		Seus dados foram salvos com sucesso!<br />
		Muito obrigado por utilizar o WebExp2Go!!<br />
		<br />		
		Gostou? Este serviço não possui patrocinador.<br />
		Se quiser ajudar, clique abaixo.<br />
		<?php donate(); ?><br />
		<br />
		Your data were succesfully saved!<br />
		Thank you for using WebExp2Go!!<br />
		<br />		
		Did you like it? This service does not have a sponsor.<br />
		If you want to helo, clique below.<br />
		<?php donate(); ?><br />
		<br />
		
	</div>	
<?php } ?>

<?php function news_to_sql(){	
	global $db;
	extract(check_input_values($_POST));
		
	$sql = "SELECT id FROM users WHERE email = '$email'";
	$db->query($sql);
	if($db->num_rows ) {
    $_SESSION["msg"][] = MESSAGE_SIGNUP_ALREADY_REGISTRED;
    return;
  }

	$pass = md5("NONE9753$+");
	$date = date("Y-m-d");
		
  $sql = "INSERT INTO users (name, email, password, start, permission, newsletter)";
  $sql .= "VALUES ('UNKNOW','$email','$pass', '$date', '0;', 1)";
  $db->query($sql);
  
  $to = TO_EMAIL_CONTACT;
  $headers = 'From: '.$_SESSION["user"]["user_email"];
  $subject = TEXT_NEWSLETTER_EMAIL_SUBJECT;
  
  send_mail_ajax($to, $subject, "", $headers);
  
  $_SESSION["msg"][] = MESSAGE_SIGNUP_WELCOME;
  unset($_POST);
}?>
<?php function news_validation(){
  $email = array( "field" => Email, "value" => $_POST["email"], "types" => array("email"));
  return validate_form(array($email));
}?>
<?php function news(){ 
	if ($_GET["m"] == "news" && news_validation()){news_to_sql();}
?>
<div class="login_area">
	<form id="formnewsletter" name="formnewsletter" method="post" action="index.php?m=news">
		<div class="login_top"></div>
		<div class="login_bodyarea">
			<div class="right_head"><div align="center"><strong><?=Newsletter_signup?></strong></div></div>
            <div class="right_textbox"><label><input name="email" type="text" class="righttextbox" value="<?=Email?>" /></label></div>
			<div class="right_text">
        <div align="center">
          <input type="submit" name="button1" id="button1" class="submitbutton" value="<?=Sign_up?>" />
        </div>
      </div> 
    <?php if(isset($_SESSION["msg"])){ ?>
      <div>
        <div align="center">
          <?=$_SESSION["msg"][0];unset($_SESSION["msg"])?>
        </div>
      </div> 
    <?php } ?>
		</div>
    <div class="login_bottom"></div>
    </form>
</div>	
	
<?php } ?>
