<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
		header("Location:index.php");
	}

	define('MyConst', TRUE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Elevpc System verison 0.1</title>
			<center>
	<link rel="stylesheet" media="screen" href="styles.css" >
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
			?>
			<td><button class="submit" type="submit"><a href="logout.php">Logg ut</a></button></td>
		</tr>
</table>
<form class="contact_form" action="record.php" method="post" name="contact_form">

		<img src="http://www.rvs-db.netau.net/images/pclogo.png" alt="Laptop" height="50" width="50">
             <h2>Skriv inn info om student/elev?
             <span class="required_notification">* Viktig å skrive under på!</span>
        </h2>
		

		
        <li>
            <label for="name">Fornavn:</label>
            <input type="text"  placeholder="Karl" required  name="fname"/>
	    <span class="form_hint">Riktig format eks: "Karl"</span>
        </li>
	 
	 <li>
            <label for="name">Etternavn:</label>
            <input type="text"  placeholder="Jakobsen" required name="lname"/>
	    <span class="form_hint">Riktig format eks: "Jakobsen"</span>
        </li>
        
		<li>
            <label for="name">Klasse:</label>
            <input type="text"  placeholder="1MKA osv" required name="class"/>
	    <span class="form_hint">Riktig format eks: "1mka, 2mka etc"</span>
        </li>
         
		 <li><strong></strong>
                  <label for="name">Serienummer:</label>
            <input type="text"  placeholder="SMP08GX50" required name="serialnumber" />
	    <span class="form_hint">Riktig format eks: "SMP08GX50"</span>
        </li>
		
	 <li>
            <label for="name">Maskinnavn/merke:</label>
            <input type="text"  placeholder="Skriv ditt maskins navn eller merke" required name="machinename" />
	    <span class="form_hint">Riktig format eks: "maskinnavn/merke"</span>
        </li>
	 
	 <li>
            <label for="name">Utlevert:</label>
            <input type="text"  placeholder="Eks: Høsten 2015" required  name="delivered"/>
	    <span class="form_hint">Riktig format eks:"Høsten 2015"</span>
        </li>
		
        <li>
		        <label for="name">Modell:</label>
            <input type="text"  placeholder="Eks Lenovo: E31" required  name="model"/>
	    <span class="form_hint">Riktig format eks: "E31"</span>
        </li>
        
		<li>
		 <label for="name">Tyveringsmerke:</label>
            <input type="text"  placeholder="Tyveringsmerke" required  name="tyveringsmerke"/>
	    <span class="form_hint">Riktig format eks: "3068"</span>
        </li>
              
        	<button class="submit" type="submit">send inn info/skjema om elev</button></center>
			
       <center><span>Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </span></center>
</form>
</body>
</html>
