<?php 
	session_start();

	if(isset($_SESSION['valid'])){
		header("Location:home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center>
<title>Elevpc system v.0.1</title>
<img src="/images/pclogo.png" alt="Laptop" height="120" width="120">
		<h1>Elevpc System v.0.1</h1>
			<link rel="stylesheet" media="screen" href="login.css" >
 

<form class="contact_form" action="verify.php" method="post" name="contact_form">
             <h2>Vennligst logg inn</h2>
             <span class="required_notification">* Viktige felter</span> </li>

        <li>
            <label for="name">Brukernavn:</label>
            <input type="text"  placeholder="Joe" required  name="name"/>
	    <h4 class="form_hint">Proper format "Joe"</h4>
        </li>
		
    <li>
            <label for="name">Passord:</label>
            <input type="password"  placeholder="Dinagat" required name="pass"/>
	    <span class="form_hint">Proper format "xxxxxxx"</span>
    </li>

       <button class="submit" type="submit">Login</button>
</center>
</html>


<h3><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS</center><h3>
<center>
<a href="http://www.000webhost.com/" target="_blank"><img src="http://www.000webhost.com/images/120x60_powered.gif" alt="Web Hosting" width="108" height="54" border="0" /></a>
<a href="http://github.com/ItsaPerryBob/RVS-DB/" target="_blank"><img src="http://www.rvs-db.netau.net/images/github.png" alt="Web Hosting" width="108" height="54" border="0" />

<h3> Ser etter dataversjonen?<h3>

		<a href="http:/rvs-db.netau.net/" title="Her">Trykk Her</a>
</center>






