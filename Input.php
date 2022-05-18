<?php

include "db_connect.php";

$keywordfromforum =$_GET["keyword"];

//echo $keywordfromforum;  shows the keyword u are searching

// search for a word 
echo "<h2>Show all sequences which are ".$keywordfromforum." : </h2>";
$sql = "SELECT identifier,Biomaterial_type,Sequences,Source FROM Biologicaldata WHERE Biomaterial_type LIKE '%".$keywordfromforum."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["identifier"]. " - Biomaterial type: " . $row["Biomaterial_type"]. " - Sequence: " . $row["Sequences"]. " - Source: " . $row["Source"]. "<br>";
  }
} else {
  echo "0 results";
}



?>