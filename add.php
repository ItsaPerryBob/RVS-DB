<?php
session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Elevpc system v.0.1</title>
	<link rel="stylesheet" media="screen" href="add.css" >
</head>
<body>
<table align="center">
		<tr>
			<td><button class="submit" type="submit"><a href="home.php">Hjem</a></button></td>
			<td><button class="submit" type="submit"><a href="find.php">Finn data</a></button></td>
			<td><button class="submit" type="submit"><a href="view.php">Vis data</a></button></td>
			<?php
				if($_SESSION['valid']=='admin'){
			
				echo "<td><button class='submit' type='submit'><a href='add.php'>Legg til bruker</a></button></td>";
				echo "<td><button class='submit' type='submit'><a href='users.php'>Vis bruker</a></button></td>";
				}
				else{
					if(!defined('MyConst')){header('Location:home.php');}
				}
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logg ut</a></button></td>
		</tr>
</table>
<form class="contact_form" action="adduser.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Skriv inn brukerdata:</h2>
             <span class="required_notification">* Viktige stjerner *, skriv i feltene for registrering</span>
        </li>
        <li>
            <label for="name">Brukernavn:</label>
            <input type="text"  placeholder="Tony" required  name="name"/>
	    <span class="form_hint">Riktig skriveformat eks: "Tony123Hansen"</span>
        </li>
	 <li>
            <label for="name">Passord:</label>
            <input type="password"  placeholder="Hawk" required name="pass"/>
	    <span class="form_hint">Riktig skriveformat eks: "Hawk002"</span>
        </li>
        <li>
        	<button class="submit" type="submit">Registrer</button>
        </li>
    </ul>
<span><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </center></span>	
</form>
</body>
</html>
