<?php


if ($mysqli -> connect_errno){
	echo "Failed to connect to Mysql :(". $mysqli -> connect_errno. ") ". $mysqli ->connect_error; 
}

echo $mysqli->host_info . "<br>";
 
$sql = "SELECT identifier,Biomaterial_type,Sequences,Source FROM Biologicaldata";
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