<?php
mysql_connect("mysql7.000webhost.com", "a1124239_rvs", "Periman0708") or die("Kan ikke finne tilkobling!");
mysql_select_db("a1124239_rvsdb") or die("Kan ikke finne database!");

//Collect
if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","", $searchq);
	
	$query = mysql_query("SELECT * FROM a1124239_rvsdb WHERE Fornavn LIKE '%$searchq%' OR Etternavn LIKE '%$searchq%'") or die("fant ikke noe");
	$count = mysql_num_rows($query);
	if($count == o){
			$output = 'Fant ikke noen resultater';
	}else{
		while($row = mysql_fetch_array($query)) {
			$fname = $row ['Fornavn'];
			$lname = $row ['Etternavn'];
			
			$output .='<div>'.$fname.' '.$lname.'</div>';
		

		}
	}
}

?>
		 			
<p><img src="images.png" width="102" height="104" style="width;120px;100px;",>
  <img src="https://www.austagderfk.no/contentassets/8ef22618ca194adb9e6a8da41abcdd55/logo_risor.jpg", style="width;120px;100px;">
<header>
   
  <head>
  
  <p>
    <label>Finn fram det du letter etter ved databasen elevpc:</label>
    <br />
    <span>Plasser "Fornavn", "Etternavn", "Serienummer",    "Maskinnavn/merke", "Tyveringsmerke" eller "Utlevert". under: </span>
    
       
<dt>
  <form action="index.php" method="post">
	<input name="search" type="text" placeholder="Search of students.." />
 	<input type="submit" value="Search" />
	
	<dt>
  <label><br>
  Fornavn</label> 
  <label>/</label>
  <label>Etternavn</label>
  <label>/</label>
  <label>Serienummer</label>
  <label>/</label>
  <label>Maskinnavn/merke</label>
  <label>/</label>
  <label>Tyveringsmerke</label>
  <label>/</label>
  <label>Utlevert:</label>


<?php print("$output");?>
  <head>
<dt>
