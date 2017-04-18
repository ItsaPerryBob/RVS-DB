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
<meta charset=utf-8" />   
   <center>

        <li>
             <h2>Endre detaljer under?</h2>
             <span class="required_notification">* Viktige felt</span>
			 </li>
		
		<li>
					 <label for="name">Dato</label>
            <input type="text"  placeholder="eks: 02.07.88, dato hentet ved reperasjon" required  name="dato" value="<?php echo $row['dato']; ?>"/>
	    <span class="form_hint">Riktig format: "02.09.22", dato hentet ved reperasjon</span>
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
            <input type="text"  placeholder="Tall" required  name="tyveringsmerke" value="<?php echo $row['tyveringsmerke']; ?>"/>
	    <span class="form_hint">Proper format "0883"</span>
        </li>
        
		<li>
         <label for="name">Utlevert:</label> 
            <input type="text"  placeholder="Her skriver man, når den ble levert" required  name="delivered" value="<?php echo $row['delivered']; ?>"/>
	    <span class="form_hint">Proper format "Eks høsten 2015"</span>
        </li>
        <li>
		
		 <label for="name">Levert tilbake:</label>
            <input type="text"  placeholder="Her skriver man, når man har utlevert etter reperasjon!" required  name="deliveredback" value="<?php echo $row['deliveredback']; ?>"/>
	    <span class="form_hint">Proper format "Her skriver man, når man har utlevert etter reperasjon!, Eks høsten 2015"</span>
        </li>
        
		<li>
			 <label for="name">Skade eller problem</label>
            <input type="text"  placeholder="Her skriver man hva problemet er." required  name="skadeellerproblem" value="<?php echo $row['skadeellerproblem']; ?>"/>
	    <span class="form_hint">Riktig format: "skjermen er ødelagt"</span>
        </li>
        <li>
		
					 <label for="name">Ansvarlig</label>
            <input type="text"  placeholder="eks: hvem som er ansvarlig:IKT" required  name="ansvarlig" value="<?php echo $row['ansvarlig']; ?>"/>
	    <span class="form_hint">Riktig format: "Hvem som er ansvarlig: eks: IKT, frflo osv"</span>
        </li>
		
		<li>		
					 <label for="name">Status</label>
            <input type="text"  placeholder="eks: tatt med relacom" required  name="status" value="<?php echo $row['status']; ?>"/>
	    <span class="form_hint">Riktig format: "eks: tatt med relacom"</span>
        </li>
		

        	<button class="submit" type="submit">Send inn endring</button>
    </center>

</form>
<?php
}
?>
</body>
</html>
