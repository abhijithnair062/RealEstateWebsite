<html>
<head>
<title>Rent page</title>
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
      <a class="navbar-brand" href="#">Rent: Please fill in your details</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="mmm.html">E-mail and other</a></li>
      <li class="active"><a href="mmm2.html">Address Details</a></li>
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
  <form name="myForm" method="post" action="mmm3.html">
    <div class="input-group">
      <input type="text" id="add1" name="address1" placeholder="Address Lane 1" style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      <input type="text" id="add2" name="address2" placeholder="Address Lane 2" style="float:left; width:100%" required/>
    </div><br><br>
    <div class="input-group">
      
      <input type="text"  name="city" placeholder="City name" style=" width:100%" onkeypress='return event.charCode >= 65 && event.charCode <= 122' required/>
    </div><br><br>
    <div class="input-group">
      <input  type="text"  name="pincode" placeholder="ZIP" style=" width:100%" maxlength="6"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'required/>
    </div>
    <br>
	<div class="input-group">
	<div class="form-group col-md-14" style="margin-top:15px;">
      <select id="inputState" class="form-control" style="height:40px;">
        <option selected>Choose State...</option>
		<option>Andhra Pradesh</option>
		<option>Arunachal Pradesh</option>
		<option>Assam</option>
		<option>Bihar</option>
        <option>Chhattisgarh</option>
		<option>Goa </option>
		<option>Gujarat</option>
		<option>Haryana</option>
		<option>Himachal Pradesh</option>
		<option>Jammu & Kashmir </option>
        <option>Jharkhand </option>
		<option>Karnataka</option>
		<option>Kerala </option>
		<option>Madhya Pradesh</option>
		<option>Maharashtra</option>
		<option>Manipur </option>
        <option>Meghalaya</option>
		<option>Mizoram</option>
		<option>Nagaland</option>
		<option>Odisha </option>
		<option>Punjab</option>
		<option>Rajasthan</option>
        <option>Sikkim </option>
		<option>Tamil Nadu</option>
		<option>Telangana </option>
		<option>Tripura</option>
		<option>Uttarakhand</option>
		<option>Uttar Pradesh</option>
        <option>West Bengal</option>
		
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