<?php

include "db_connect.php";

$identifierfromform =$_GET["identifier"];
$Biomatfromform =$_GET["Biomat"];
$Seqfromform =$_GET["Seq"];
$Srcfromform =$_GET["Src"];
//echo $keywordfromforum;  shows the keyword u are searching

// search for a word 

$Biomatfromform = addslashes($Biomatfromform);
$Srcfromform=addslashes($Srcfromform);

echo "<h2>Adding new input details : ".$identifierfromform.",".$Biomatfromform." etc from ".$Srcfromform." from User : </h2>";

$sql = "INSERT INTO biologicaldata (identifier,Biomaterial_type,Sequences,Source) VALUES ('$identifierfromform','$Biomatfromform','$Seqfromform','$Srcfromform')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "All results.php";


?>

<a href='index.php'>Click me to go to home!!</a>