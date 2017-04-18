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
	<meta charset="utf-8" />
	<title>Elevpc system v.0.1</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
</head>
<body>
<table align="center">
		<tr>
			<td><button class="submit" type="submit"><a href="home.php">Hjem</a></button></td>
			<td><button class="submit" type="submit"><a href="find.php">Finn data</a></button></td>
			<td><button class="submit" type="submit"><a href="view.php">Vis Data</a></button></td>
			<?php
				if($_SESSION['valid']=='admin'){
			
				echo "<td><button class='submit' type='submit'><a href='add.php'>Legg til bruker</a></button></td>";
				echo "<td><button class='submit' type='submit'><a href='users.php'>Vis bruker</a></button></td>";
				}
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logg ut</a></td>
		</tr>
</table>
<form class="contact_form" action="search.php" method="post" name="contact_form">
      <center>
	  <li>
             <h2>Finn data her og skriv det under her:
             <span class="required_notification">* Husk: Skriv navn riktig</span>
        </h2></li>
        
	<table><tr>
            <td>
		<input type="text"  placeholder="Karl" required  name="name"/>
	    </td>
	    <td>
		<button class="submit" type="submit">Finn data</button>
	    </td>
	</tr></table>
	
	</center>

<span><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </center></span>
</form>
</body>
</html>
