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

    function type(){
        $con=mysqli_connect("localhost:3308","root","","pixelinkz");
        $type=$_POST['type'];
        $sql0="select TypeID from propertytype where TypeName='$type'";
        $result0=$con->query($sql0);
        while($row=$result0->fetch_assoc()){
            $ptype=$row['TypeID'];
        }
        $out='';
        $out.='<option selected>Select Property SubType</option>';
        $sql="select SubTypeName from propertysubtype where TypeID='$ptype'";
        $result=$con->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc()){
                 $out.='<option value="'.$row["SubTypeName"].'">'.$row["SubTypeName"].'</option>';
            }
        }
        echo $out;
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
    if(isset($_POST['type']))
    {
      type();
    }   
  ?>