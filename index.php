<html>
<head>
<title> Bio materials Database </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 
<h1> Biomaterials Database</h1>
 
 <?php
 
include "db_connect.php"; 
//include "All results.php";

?>



<!-- bootstraps below -------------------------------------------------------->

<form class="form-horizontal" action="search for a word.php">
<fieldset>

<!-- Form Name -->
<legend>Search Bar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search :</label>  
  <div class="col-md-6">
  <input id="keyword" name="keyword" type="text" placeholder="Eg. Homo sapiens,Covid-19 etc." class="form-control input-md" required="">
  <span class="help-block">Search for points of interest from biologicaldata SQL table</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Search </button>
  </div>
</div>

</fieldset>
</form>

<!-- bootstraps above -------------------------------------------------->



<br>
<hr>



<!------------------------boot below---------------------------->

<form class="form-horizontal" action="/add_input.php">
<fieldset>

<!-- Form Name -->
<legend>Submission Bar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="identifier">ID</label>  
  <div class="col-md-6">
  <input id="identifier" name="identifier" type="text" placeholder="Eg.NP_001289692.1,CAD2191114.1 etc." class="form-control input-md" required="">
  <span class="help-block">Enter the Sequence Identifier</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Biomat">Biological Material Type</label>  
  <div class="col-md-5">
  <input id="Biomat" name="Biomat" type="text" placeholder="Eg. Protein,Nucleotides,mRNA etc." class="form-control input-md" required="">
  <span class="help-block">Enter type of biological material.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Seq">Sequences</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Seq" name="Seq">Enter a Sequence Identity:

ATCGATCG...[...]
DAISTTFTT...[...]</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Src">Sources</label>  
  <div class="col-md-6">
  <input id="Src" name="Src" type="text" placeholder="Eg. Homo sapiens, Pan paniscus" class="form-control input-md" required="">
  <span class="help-block">Enter the source biological entity</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-info">Submit to Database</button>
  </div>
</div>

</fieldset>
</form>

<!------------------------boot above---------------------------->


<?php
//include "search for a word.php";




$mysqli->close();
 
 ?>
 
</body>
</html>