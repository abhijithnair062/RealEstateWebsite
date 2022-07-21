<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $_SESSION['firstname']=$_POST['firstname'];
  $_SESSION['secondame']=$_POST['secondame'];
  $_SESSION['email']=$_POST['email'];
  $_SESSION['password']=$_POST['password'];
  echo "<script>
  window.location.href ='sss2.php';
  </script>";
  }
?>


<html>
<head>
<title>Sell Form</title>
<link rel="stylesheet" type="text/css" href="form.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function validation()
	{
	       var x = document.forms["myForm"]["firstnamename"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	}
  </script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sell: Please fill in your details</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">E-mail and other</a></li>
      <li class="not-active"><a href="#">Address Details</a></li>
      <li class="not-active"><a href="#">Property info</a></li>
      <li class="not-active"><a href="#">Property features</a></li>
	  <li class="not-active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav>
<div class="second-sec">
<center><h3 style="font-family:verdana">E-mail ID and other details</h3><br><hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>
</div><br><br>
<div class="container" align="center">
  <form name="myForm" method="post" action="sss.php">
    <div class="input-group">
      <input type="text" id="fname" name="firstname" placeholder="Your firstname.." style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      <input type="text" id="fname" name="secondame" placeholder="Your lastname.." style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="float:right;" required/>
    </div><br><br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password" style="float:right;" required/>
    </div>
    <br>
    <div class="input-group" style="margin-top: 30px;">
  <input type="Submit" value="Next" class="button"/>  
  </div>
  </form>
  <br>
</div>



</center>
<br>

</body>
</html>