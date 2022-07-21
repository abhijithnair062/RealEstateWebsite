<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $_SESSION['bedroom']=$_POST['bedroom'];
  $_SESSION['balcony']=$_POST['balcony'];
  echo "<script>
  window.location.href ='sss5.php';
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
      <li class="active"><a href="#">Property features</a></li>
	  <li class="not-active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav>
<div class="fifth-sec">
     <center><h3 style="font-family:verdana">Property Features</h3>
   <hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>
  <form method="post" action="sss4.php" style="margin-top: 20px;">
    <div class="input-group">
    <select class="form-control" name="bedroom" style="height: 50px; margin-bottom: 20px;">
    <option selected>Bedrooms</option>                                            
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    </select>
    </div>
    <div class="input-group">
    <select class="form-control" name="balcony" style="height: 50px;">
    <option selected >Balconies</option>                                            
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>  
    </select>
    </div>
   </br></br></br></br>
    <div class="input-group" style="margin-top: 20px;">
    <input type="Submit" value="Next" class="button"/>  
    </div>
  </form>
</center>
</div>
  </body>
  </html>