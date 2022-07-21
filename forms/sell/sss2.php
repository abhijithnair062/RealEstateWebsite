<?php
  session_start();
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  $_SESSION['address1']=$_POST['address1'];
  $_SESSION['address2']=$_POST['address2'];
  $_SESSION['city']=$_POST['city'];
  $_SESSION['pincode']=$_POST['pincode'];
  $_SESSION['inputState']=$_POST['inputState'];
  echo "<script>
  window.location.href ='sss3.php';
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
      <li class="not-active"><a href="#">Property info</a></li>
      <li class="not-active"><a href="#">Property features</a></li>
	  <li class="not-active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav>
<div class="third-sec">
<center><h3 style="font-family:verdana">Address Details</h3>
<hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>
  <form name="myForm" method="post" action="sss2.php">
    <div class="input-group">
      <input type="text" id="add1" name="address1" placeholder="Address Lane 1" style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      <input type="text" id="add2" name="address2" placeholder="Address Lane 2" style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      
      <input type="text"  name="city" placeholder="City name" style=" width:100%" required/>
    </div><br><br>
    <div class="input-group">
      <input  type="text"  name="pincode" placeholder="ZIP" style=" width:100%" maxlength="6" required/>
    </div>
    <br>
  <div class="input-group">
  <div class="form-group col-md-14" style="margin-top:15px;">
      <select id="inputState" class="form-control" style="height:40px;" name="inputState">
        <option selected>Choose State...</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa </option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu & Kashmir">Jammu & Kashmir </option>
        <option value="Jharkhand">Jharkhand </option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala </option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur </option>
        <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha </option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim </option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana </option>
    <option value="Tripura">Tripura</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="West Bengal">West Bengal</option>
    
      </select>
    </div></div><br><br>
    <div class="input-group" style="margin-top: 30px;">
  <input type="Submit" value="Next" class="button"/>  
  </div> 
  </form>
  
</center>
</div>
  </body>
  </html>