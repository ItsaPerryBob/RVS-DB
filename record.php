<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$serialnumber = $_POST['serialnumber'];
$class = $_POST['class'];
$machinename = $_POST['machinename'];
$delivered = $_POST['delivered'];
$model = $_POST['model'];
$tyveringsmerke = $_POST['tyveringsmerke'];


$rec = "insert into data values('','$fname','$lname', '$class','$serialnumber','$model', '$machinename','$delivered', '$tyveringsmerke' )";

if(mysql_query($rec)){
	echo "<center></h1>Data oppdatert i database!</h1></center>"."<br />";
	echo "<center></h6>Vennligst vent mens du blir omdirigert i 3 sekunder...</h6></center>"."<br />";
	header('Refresh: 3; url=home.php');
}
else{
	die("Data fikk ikke lagt i database");
}
?>
