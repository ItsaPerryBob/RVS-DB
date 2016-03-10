<?php 
	session_start();

	if(isset($_SESSION['valid'])){
		header("Location:home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Elevpc system v.0.1</title>
<img src="/images/pclogo.png" alt="Laptop" height="120" width="120">
		<h1>Elevpc System v.0.1</h1>
			<link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
<form class="contact_form" action="verify.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Vennligst logg inn</h2>
             <span class="required_notification">* Viktige felter</span>
        </li>
        <li>
            <label for="name">Brukernavn:</label>
            <input type="text"  placeholder="Joe" required  name="name"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">Passord:</label>
            <input type="password"  placeholder="Dinagat" required name="pass"/>
	    <span class="form_hint">Proper format "xxxxxxx"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Login</button>
        </li>
    </ul>

<span><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </center></span>
</form>
</body>
</html>
