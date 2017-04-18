<?php 
	session_start();

	if(isset($_SESSION['valid'])){
		header("Location:home.php");
	}
?>

<!DOCTYPE html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.css"/>
<link rel="stylesheet" href="style1.css"/>
<div class="login">
		<h4>Elevpc System</h4>
</div>
 
<div class="box">
<div class="login">
<h4 class="label2">Vennligst logg inn:</h4>
</div>
<div class="login" action="verify.php" method="post" name="contact_form">
             
             <label>Brukernavn:</label>
            <input type="text" class="login"   required  name="name"/>
            <label>Passord:</label>
            <input type="password" class="login" required name="pass"/> 
            <button class="btn-large" type="submit">Logg inn</button>
			
			<input type="checkbox" checked="checked"/>
            </div>

			<div class="login">
<p class="center">
 Lagd av Per Arne Dahl Kristiansen, 2016-2018 (c)
</p>
<p class="center"> Version: 2.0 </p>
</div>
</div>






