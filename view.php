<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("mysql7.000webhost.com","a1124239_rvs","Periman0708") or die(mysql_error());
mysql_select_db("a1124239_rvsdb", $conn) or die(mysql_error());

$find = mysql_query("select * from data");

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Elevpc System v.0.1</title>
	<link rel="stylesheet" media="screen" href="stylesS.css" >
	<script>
		function confirmDelete(delUrl) {
  			if (confirm("Vil du slette?")) 
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
             <h2>Resultatene</h2>
             <span class="required_notification">Dette er resultatene vi finner i databasen:</span>
        </li>	
	</li>
		<?php
			echo "<table border='0' width='100%'>";
			echo "<tr class='head'>";
				echo "<th>Dato</th>";
				  echo "<th>Fornavn</th>";
				  echo "<th>Etternavn</th>";
				  echo "<th>Klasse</th>";
				  echo "<th>Serienummer</th>";
				  echo "<th>Maskinnavn/merke</th>";
				  echo "<th>Modell</th>";
				   echo "<th>Utlevert</th>";
				   echo "<th>Levert tilbake</th>";
				   echo"<th>tyveringsmerke</th>";
				   echo"<th>skade eller problem</th>";
				   echo "<th>Ansvarlig</th>";
				   echo"<th>Status</th>";
				   echo "<th>Endringer</th>";
				  echo "</tr>";
			while($row = mysql_fetch_array($find)){
				  echo "<tr class='t1'>";
				  echo "<td>".$row['dato']."</td>";
				  echo "<td>".$row['fname']."</td>";
				  echo "<td>".$row['lname']."</td>";
				  echo "<td>".$row['class']."</td>";
				  echo "<td>".$row['serialnumber']."</td>";
				  echo "<td>".$row['machinename']."</td>";
				   echo "<td>".$row['model']."</td>";
				  echo "<td>".$row['delivered']."</td>";
				  echo "<td>".$row['deliveredback']."</td>";
				  echo "<td>".$row['tyveringsmerke']."</td>";
				  echo "<td>".$row['skadeellerproblem']."</td>";
				  echo "<td>".$row['ansvarlig']."</td>";
				  echo "<td>".$row['status']."</td>";
			?>
				  <td>
					<a href="edit.php?id=<?php echo $row['id'];?>" class='action'>Endre</a> | 
					<a href="delete.php?id=<?php echo $row['id'];?>" class='action' onclick="return confirm('Er du sikker at du vil slette?')">Slett</a>|
					<a href="pdf.php?id=<?php echo $row['id'];?>" class='action'>send til reperasjon (pdf)</a> 
				  </td>
			<?php
				  echo "</tr>";
 				
  			}
			echo "</table>";
		?>
	</li>
    </ul>
<span><center> Lagd av Per Arne Dahl Kristiansen, 2016 (c), 1SSA, RVS </center></span>
<a href="http://www.000webhost.com/" target="_blank"><img src="http://www.000webhost.com/images/80x15_powered.gif" alt="Web Hosting" width="80" height="15" border="0" /></a>
</form>
</body>
</html>
