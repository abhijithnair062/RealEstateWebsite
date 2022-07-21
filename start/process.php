  <?php
session_start();
    function login()
    {
    $_SESSION['message']='';
    $con=mysqli_connect("localhost:3308","root","","pixelinkz");
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="select * from login where UserName='$user' and UPassword='$pass'";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc()){
        $_SESSION['login']=$row['UName'];
        $_SESSION['emailID']=$row['Email'];
        $_SESSION['message']="Welcome ".$row['UName'];
        echo "<script>
        location.reload();
        </script>";
      }
    }
    else{
        echo "Wrong Username or Password";
      }
    }


    function register()
    {
    $con=mysqli_connect("localhost:3308","root","","pixelinkz");
    $_SESSION['message']='';
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $email=$_POST['email'];
    if($pass!=$cpass)
      echo "Passwords do not match";
    else
    {
    $sql="select * from login where UserName='$user'";
    $sql1="select * from login where Email='$email'";
    $result=$con->query($sql);
    $result1=$con->query($sql1);
    if($result1->num_rows>0)
    {
      while($row=$result1->fetch_assoc()){
        echo "Email already registered";
      }
    }
    else
    {
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc()){
        echo "Username already used";
      }
    }
    else{
        $_SESSION['message']="Welcome ".$user;
        $_SESSION['login']=$user;
        $_SESSION['emailID']=$email;
        echo "<script>
        location.reload();
        </script>";        
      }
    }
    }
    }


    function forgot()
    {
    $con=mysqli_connect("localhost:3308","root","","pixelinkz");
    $email=$_POST['email'];
    $sql="select * from login where Email='$email'";
    $result=$con->query($sql);
    $load='';
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc()){
        require 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->isSMTP();                                   
        $mail->Host = 'smtp.gmail.com';                    
        $mail->SMTPAuth = true;                            
        $mail->Username = 'rrkk404@gmail.com';          
        $mail->Password = '0753rrkk'; 
        $mail->SMTPSecure = 'tls';                         
        $mail->Port = 587;                                 

        $mail->setFrom('no-reply@pixelinkz.com', 'PIXELINKZ');
        $mail->addReplyTo('no-reply@pixelinkz.com', 'PIXELINKZ');
        $mail->addAddress($row['Email']);  

        $mail->isHTML(true);

        $bodyContent = '<h1>Copy and Paste the password</h1>';
        $bodyContent .= '<p><b>'.$row['UPassword'].'</b> This is your password sent by <b>pixelinkz</b></p>';

        $mail->Subject = 'Change Your Password';
        $mail->Body    = $bodyContent;

        if(!$mail->send()) {
            $load.='Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $load.='Instructions to reset password is sent';
        }
        echo $load;
        }
    }
    else{
        $load.='No such email is registered';
        echo $load;
      }
    }

function pagination()
{
	$con = mysqli_connect("localhost:3308", "root", "", "pixelinkz");  
	 $record_per_page = 3;  
	 $output = ''; 
     $query= '';
     $page_query= '';
     $where= ''; 
	 $page = $_POST["page"];
	 $start_from = ($page - 1)*$record_per_page; 
     if($_SESSION['what']=="Rent")
        $where="WHERE property.SubTypeID=propertysubtype.SubTypeID AND property.PropertyID IN(select Property_ID from rent) AND propertysubtype.SubTypeName IN('".implode("','",$_SESSION['psubtype'])."')";
     else
        $where="WHERE property.SubTypeID=propertysubtype.SubTypeID AND property.PropertyID NOT IN(select Property_ID from rent) AND propertysubtype.SubTypeName IN('".implode("','",$_SESSION['psubtype'])."')";
	 $query = "SELECT * FROM property,propertysubtype $where LIMIT $start_from, $record_per_page";
     $page_query = "SELECT * FROM property,propertysubtype $where";   
	 $result = mysqli_query($con, $query);  
	 while($row = mysqli_fetch_array($result))  
	 {
		$output .= '<div class="row align-items-center" id="'.$row["PropertyID"].'" style="background-color: grey; padding: 10px 0 10px 0; margin: 10px; cursor: pointer;">
                        <form id="form'.$row["PropertyID"].'" method="get" action="desc.php">
                            <input type="hidden" name="prid" value="'.$row["PropertyID"].'">
                        </form>
						<div class="col-md-3"><img class="im" id="im" width="100%" alt="for sale" src="'.$row["image"].'"></div>
						<div class="col-md-8">
							<h3>'.$row["Title"].'</h3>
							<p>
							<div class="d-flex flex-row">
							<div class="d-inline p-2 bg-dark text-white">Carpet Area:  <span style="font-size: 15px; color: yellow;">12 sqft</span></div>
							<div class="d-inline p-2 bg-dark text-white">Status:  <span style="font-size: 15px; color: yellow;">Ready to move</span></div>
							<div class="d-inline p-2 bg-dark text-white">Floor:  <span style="font-size: 15px; color: yellow;">6th</span></div>
							<div class="d-inline p-2 bg-dark text-white">Transaction:  <span style="font-size: 15px; color: yellow;">New Property</span></div>
							</div>
							</p>
							<a class="btn btn-primary my-3 btn-block" id="bt'.$row["PropertyID"].'" data-toggle="modal" data-target="#exampleModal2" style="width: 150px;">Get Contact</a>
						</div>  
						</div>  
                        <script>$("#'.$row["PropertyID"].'").on("click",function(e){if(!$(e.target).is(".btn")){$("#form'.$row["PropertyID"].'").submit();}});
                        </script>       
				';  
	 }    
	 $page_result = mysqli_query($con, $page_query);  
	 $total_records = mysqli_num_rows($page_result);  
     if($total_records==0)
        echo '<center><span style="font-size:30px;color: gold; font-weight: bold;">Sorry, No Results.....<span></center>';
	 $total_pages = ceil($total_records/$record_per_page); 
	 $output .="<br><center>"; 
	 for($i=1; $i<=$total_pages; $i++)  
	 {  
				$output .= "<span class='page_link' style='cursor:pointer; padding:9px; background-color:white; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
	 }  
	 $output .= "</center><script>$('#".$page."').css({'background-color':'#6666FF'});</script>";  
	 echo $output;
}


    function srchc(){
        $con=mysqli_connect("localhost:3308","root","","pixelinkz");
        $type=$_POST['srchc'];
        $sql="select CityName from city";
        $result=$con->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc()){
                 echo '<option>'.$row["CityName"].'</option>';
            }
        }
    }

    if(isset($_POST['submit']))
    {
      login();
    }
    if(isset($_POST['regbtn']))
    {
      register();
    }
    if(isset($_POST['fogbtn']))
    {
      forgot();
    }
    if(isset($_POST['page']))
    {
      pagination();
    }
    if(isset($_POST['srchc']))
    {
      srchc();
    }
  ?>