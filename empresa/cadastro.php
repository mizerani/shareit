<?	
	//constant that allow access to the file
	define("IDEA",1);
	require_once("include/include.php");
	if(!isset($_SESSION['logged_in'])){
	header("Location: index.php");
	exit;
}
?>
<style>
:invalid { 
  border-color: #e88;
  -webkit-box-shadow: 0 0 5px rgba(255, 0, 0, .8);
  -moz-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
  -o-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
  -ms-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
  box-shadow:0 0 5px rgba(255, 0, 0, .8);
}

:required {
  border-color: #88a;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
  -o-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
  -ms-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
  box-shadow: 0 0 5px rgba(0, 0, 255, .5);
}

form {
  width:300px;
  padding: 10px 10px;
  margin: 0 auto;
  float: left;
}

input {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  border:1px solid #ccc;
  font-size:20px;
  width:300px;
  min-height:30px;
  display:block;
  margin-bottom:15px;
  margin-top:5px;
  outline: none;

  -webkit-border-radius:5px;
  -moz-border-radius:5px;
  -o-border-radius:5px;
  -ms-border-radius:5px;
  border-radius:5px;
}

input[type=submit] {
  background:none;

  padding:10px;
}
</style>
<?

	echo "<div><form method='post' action='reg.php'>

			<input type='hidden' name='admin' value=".((int)$_SESSION['profile_id']).">

  			<label>Razão Social:</label>
  			<input type='text' name='rs' required>
  			<label>Nome Fantasia:</label>
  			<input type='text' name='nf' required>

  			<label>Login:</label>
  			<input type='text' name='login' required>
			<label>Senha:</label>
  			<input type='password' name='p1' required>
			<label>Repita:</label>
  			<input type='password' name='p2' required>
    
  			<input type='hidden' name='s' value=".$_SESSION['s'].">
  			<input type='submit' value='Registrar' /> 
		</form></div>"

?>
