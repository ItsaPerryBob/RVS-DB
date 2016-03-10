<?php
	session_start();

	$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
	mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

	$uname=$_POST['name'];
	$pass=$_POST['pass'];
	$password = md5($pass);
	
	$result = mysql_query("select * from users where username='$uname' and password='$password'",$conn)
		or die("Could not execute the select query.");

	$row = mysql_fetch_assoc($result);
	
	if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
	else
		{
			echo "<center></h1>Tilgang nektet</h1></center>"."<br />";
			echo "<center></h6> Vennligst vent mens du blir omdirigert i 3 sekunder</h6></center>"."<br />";
			header('Refresh: 3; url=index.php');
		}


	if(isset($_SESSION['valid']))
		{
			header("Location:home.php");
		}

	
?>
