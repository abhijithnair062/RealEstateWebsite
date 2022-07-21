<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $_SESSION['barea']=$_POST['barea'];
  $_SESSION['carea']=$_POST['carea'];
  echo "<script>
  window.location.href ='sss6.php';
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
	  <li class="active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav> 
 <div class="sixth-sec">
   <center><h3 style="font-family:verdana">Area Details</h3>
   <hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>
   <form method="post" action="sss5.php">
    <label style="font-size: 20px;">Built-up Area :</label>
        <div class="input-group"><input type="text" name="barea" style="width: 95%; float: left; margin-right: 15px;" placeholder="Built-up Area" ><b>sq-ft</b></div><br><br>
    <label style="font-size: 20px;">Carpet Area :</label>
        <div class="input-group"><input type="text" name="carea" style="width: 95%; float: left; margin-right: 15px;" placeholder="Carpet Area" ><b>sq-ft</b></div> 
    </br></br></br></br>
    <div class="input-group" style="margin-top: 30px;">
    <input type="Submit" value="Next" class="button"/>  
    </div> 
   </form>
   </center>
  </div>
  </body>
  </html>
  