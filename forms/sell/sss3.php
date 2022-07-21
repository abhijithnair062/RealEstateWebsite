<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $_SESSION['ptype']=$_POST['ptype'];
  $_SESSION['psubtype']=$_POST['psubtype'];
  echo "<script>
  window.location.href ='sss4.php';
  </script>";
  }
?>

<html>
<head>
<title>Sell page</title>
<link rel="stylesheet" type="text/css" href="form.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sell: Please fill in your details</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="mmm.html">E-mail and other</a></li>
      <li class="active"><a href="#">Address Details</a></li>
      <li class="active"><a href="#">Property info</a></li>
      <li class="not-active"><a href="#">Property features</a></li>
	  <li class="not-active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav>
  <center><h3>Property Info</h3>
  <hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>

  <form method="post" action="sss3.php">
  <div class="input-group">
  <div class="form-group col-md-4" style="width: 100%;" >
      <label for="inputState" style="font-size: 20px; margin-bottom: 20px;">Property Type</label>
      <select id="inputState" class="form-control" name="ptype" style="height: 50px; margin-bottom: 20px;">
        <option selected>Select Property Type</option>                                            
		<option value="RESIDENTIAL">RESIDENTIAL</option>
		<option value="COMMERCIAL">COMMERCIAL</option>
		<option value="OTHER">OTHER</option>
 	  </select><br>
      <label for="inputState" style="font-size: 20px; margin-bottom: 20px;">Property SubType</label>
      <select id="inputState" class="form-control" name="psubtype" style="height: 50px; margin-bottom: 20px;">
        <option selected>Select Property SubType</option>                                            
		<option value="Flat">Flat</option>
		<option value="House/Villa">House/Villa</option>ptype
		<option value="Plot/Land">Plot/Land</option>
		<option value="Office">Office</option>
		<option value="Shop">Shop</option>
		<option value="Commercial Land">Commercial Land</option>
		<option value="Warehouse">Warehouse</option>
		<option value="Industrial Building">Industrial Building</option>
		<option value="Agricultural Land">Agricultural Land</option>
		<option value="Farm House">Farm House</option>
 	  </select> 
 	</div>
 	</div>
    <div class="input-group" style="margin-top: 30px;">
	<input type="Submit" value="Next" class="button"/>  
	</div>
	</form>
	</center>
 </body>
 </html>