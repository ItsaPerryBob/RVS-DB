<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}
	
$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

$find = mysql_query("select * from users");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Elevpc System v.0.1</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Er du sikker på du vil slette??")) {
   				 document.location = delUrl;
 			 }
		}
	</script>
</head>
<body>
<table align="center">
		<tr>
			<td><button class="submit" type="submit"><a href="home.php">Hjem</a></button></td>
			<td><button class="submit" type="submit"><a href="find.php">Søk</a></button></td>
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
<form class="contact_form" action="search.php" method="post" name="contact_form">
        <li>
             <h2>Søkeresultater:</h2>
             <span class="required_notification">Følgende søk matcher vår database:</span>
        </li>	
	</li>
		<?php
			echo "<table border='1' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>Brukernavn</th>";
				  echo "<th>Endring</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['username']."</td>";
			?>
				  <td>
					<a href="deleteuser.php?id=<?php echo $row['id'];?>" class='action' onclick="return confirm('Are you sure you want to delete?')">Slett</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>

</form>
</body>
</html>
