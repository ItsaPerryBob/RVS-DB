<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

$key = $_POST['name'];
$find = mysql_query("SELECT * FROM data WHERE fname LIKE'%$key%'");

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Elevpc system</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Er du sikker på at du vil slette dette?")) {
   				 document.location = delUrl;
 			 }
		}
	</script>
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
<form class="contact_form" action="search.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Resultater:</h2>
             <span class="required_notification">Vi fant dette i databasen:</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				  echo "<th>Fornavn</th>";
				  echo "<th>Etternavn</th>";
				  echo "<th>Klasse</th>";
				  echo "<th>Serienummer</th>";
				  echo "<th>Maskinnavn/merke</th>";
				  echo "<th>Modell</th>";
				   echo "<th>Utlevert</th>";
				    echo"<th>tyveringsmerke</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['fname']."</td>";
				  echo "<td>".$row['lname']."</td>";
				  echo "<td>".$row['class']."</td>";
				  echo "<td>".$row['serialnumber']."</td>";
				  echo "<td>".$row['machinename']."</td>";
				   echo "<td>".$row['model']."</td>";
				  echo "<td>".$row['delivered']."</td>";
				  echo"<td>".$row['tyveringsmerke']."</td>";
			?>
				  <td>
					<a href="edit.php?id=<?php echo $row['id'];?>" class='action'>Endre</a> | 
					<a href="delete.php?id=<?php echo $row['id'];?>" class='action' onclick="return confirm('Er du sikker på at du vil slette dette?)">slett</a>
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>
    </ul>
<span><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </center></span>
</form>
</body>
</html>
