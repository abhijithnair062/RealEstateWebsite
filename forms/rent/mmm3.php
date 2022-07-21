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
      <li class="active"><a href="mmm3.html">Property info</a></li>
      <li class="not-active"><a href="#">Property features</a></li>
	  <li class="not-active"><a href="#">Area Details</a></li>
	  <li class="not-active"><a href="#">Price Details</a></li>
    </ul>
  </div>
</nav>
  <center><h3>Property Info</h3>
  <hr style="width: 50%; height: 8px; display: block; margin: 0 auto; border: none; box-shadow: 3px 3px 6px #0e0e0e; background-color: #898989"/><br><br>

  <form action="mmm4.html">
  <div class="input-group">
  <div class="form-group col-md-4" style="width: 100%;" >
      <label for="inputState" style="font-size: 20px; margin-bottom: 20px;">Property Type</label>
      <select id="inputState" class="form-control" style="height: 50px;">
        <option selected>Select Property Type</option>                                            
		<option><strong>ALL RESIDENTIAL</strong></option>
		<option>Multistorey Apartment</option>
		<option>Builder Floor Apartment</option>
		<option>Residential House</option>
		<option>Villa</option>
		<option>Residential Plot</option>
		<option>Penthouse</option>
		<option>Studio Apartment</option>
		<option>ALL COMMERCIAL</option>
		<option>Commercial Office Space</option>
		<option>Office in IT Park/ SEZ</option>
		<option>Commercial Shop</option>
		<option>Commercial Showroom</option>
		<option>Commercial Land</option>
		<option>Warehouse/ Godown</option>
		<option>Industrial Land</option>
		<option>Industrial Building</option>
		<option>Industrial Shed</option>
		<option>ALL AGRICULTURAL</option>
		<option>Agricultural Land</option>
		<option>Farm House</option>
		<option>Location</option>	
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