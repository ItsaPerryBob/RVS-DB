<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];;
 }
$edit = mysql_query("select * from data where id ='$id'");

while($row = mysql_fetch_array($edit)){


?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Elevpc system v.0.1</title>
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
<form class="contact_form" action="update.php" method="post" name="contact_form">
<input type="hidden" name="id" value ="<?php echo $id; ?>">
    <ul>
        <li>
             <h2>Endre detaljer under?</h2>
             <span class="required_notification">* Viktige felt</span>
        </li>
        <li>
            <label for="name">Fornavn:</label>
            <input type="text"  placeholder="Joe" required  name="name" value="<?php echo $row['fname']; ?>"/>
	    <span class="form_hint">Proper format "Joe"</span>
        </li>
	 <li>
            <label for="name">Etternavn:</label>
            <input type="text"  placeholder="Dinagat" required name="lname" value="<?php echo $row['lname']; ?>"/>
	    <span class="form_hint">Proper format "Dinagat"</span>
        </li>
         <li>
            <label for="name">Klasse:</label>
            <input type="text"  placeholder="1MKA eller lignende" required name="class" value="<?php echo $row['class']; ?>"/>
	    <span class="form_hint">Proper format "1mka"</span>
        </li>
	 <li>
            <label for="name">Serienummer:</label>
            <input type="text"  placeholder="SMP08GX50" required name="serialnumber" value="<?php echo $row['serialnumber']; ?>"/>
	    <span class="form_hint">Proper format "SMP08GX50"</span>
        </li>
	 <li>
            <label for="name">Maskinnavn/merke:</label>
            <input type="text"  placeholder="Maskinnavn med tall eller maskinmerke" required  name="machinename" value="<?php echo $row['machinename']; ?>"/>
	    <span class="form_hint">Proper format "Maskinnavn med tall eller maskinmerke"</span>
        </li>
        <li>
        
         <label for="name">Tyveringsmerke:</label>
            <input type="text"  placeholder="" required  name="grade" value="<?php echo $row['tyveringsmerke']; ?>"/>
	    <span class="form_hint">Proper format ""</span>
        </li>
        <li>
        
         <label for="name">Utlevert:</label>
            <input type="text"  placeholder="eks Høsten 2015" required  name="grade" value="<?php echo $row['delivered']; ?>"/>
	    <span class="form_hint">Proper format "Eks høsten 2015"</span>
        </li>
        <li>
		
		 <label for="name">Levert tilbake:</label>
            <input type="text"  placeholder="eks Høsten 2015" required  name="grade" value="<?php echo $row['deliveredback']; ?>"/>
	    <span class="form_hint">Proper format "Eks høsten 2015"</span>
        </li>
        <li>
		
        	<button class="submit" type="submit">Send inn endring</button>
        </li>
    </ul>

</form>
<?php
}
?>
</body>
</html>
