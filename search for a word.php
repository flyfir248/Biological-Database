<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<style>
	{
	font-family:Arial,Helvetica,sans-serrif;
	}
</style>

</head>

<?php

include "db_connect.php";

$keywordfromforum =$_GET["keyword"];

//echo $keywordfromforum;

// search for a word 
echo "<h1>Show all sequences which are ".$keywordfromforum." : </h1>";
$sql = "SELECT identifier,Biomaterial_type,Sequences,Source FROM Biologicaldata WHERE Biomaterial_type LIKE '%".$keywordfromforum."%'";
$result = $mysqli->query($sql);




?>


<div id="accordion">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["identifier"]. " - Biomaterial type: " . $row["Biomaterial_type"]. " - Sequence: " . $row["Sequences"]. " - Source: " . $row["Source"]. "<br>";
	echo"<h3>$row[identifier]</h3>";
	echo"<div><p>    $row[Biomaterial_type] <br> $row[Source] <br> $row[Sequences] </p></div>";
  }
} else {
  echo "0 results";
}



?>
</div>