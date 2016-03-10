<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

$id=$_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$class = $_POST['class'];
$serialnumber = $_POST['serialnumber'];
$delivered = $_POST['delivered'];
$model = $_POST['model'];

$rec = "update data set fname = '$fname',lname = '$lname',class='$class',serialnumber='$',delivered='$delivered' where id='$id'";

if(mysql_query($rec)){
	echo "<center></h1>Data oppdatert i database</h1></center>"."<br />";
	echo "<center></h6>Vennligst vent mens du blir omdirigert i 3 sekunder</h6></center>"."<br />";
	header('Refresh: 3; url=view.php');
}
else{
	die("Data kunne ikke å oppdatere i databasen...??!");
}
?>
