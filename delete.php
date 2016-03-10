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

$rec = "delete from data where id='$id'";

if(mysql_query($rec)){
	echo "<center></h1>Sletter data i database</h1></center>"."<br />";
	echo "<center></h6>Vennligst vent mens du blir omdirigert i 3 sekunder...</h6></center>"."<br />";
	header('Refresh: 3; url=home.php');
}
else{
	die("Data failed to delete in the database");
}
?>
