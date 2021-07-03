<?php
session_start();
?>



<html lang="en">
<head>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  


<style>



.container {

  box-sizing: border-box;
  display: block;
  width: 70%;
  border-width: 1px;

  padding: 10px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}




.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
body {
  margin: 0;
  font-family: 'Open Sans', sans-serif; 
   no-repeat center center fixed;
   background-size: 100% 100%;
   height: 100%;
   position: absolute;
   width: 100%;
   background: linear-gradient(to right, #C9D0D1  0%,#C9D0D1   100%);
}

.login-container {
     background: linear-gradient(to right, #9CA4FE  0%,#FF889A  100%);
  padding: 12px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}



.login {
  width: 700px;
  margin: 16px auto;
  font-size: 16px;
}
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background:#005eff;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color:#ffffff;
}



.login p {
  padding: 12px;
}
.login input {
  box-sizing: border-box;
  display: block;
  width: 70%;
  border-width: 1px;
  border-style: solid;
  padding: 10px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}



  
  
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.login input[type="select"],
.login input[type="password"]
 {
  background: #fff;
  border-color: #bbb;
  color: #555;

}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #005eff;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
  padding: 10px;

}

.login input[type="submit"]:hover {
  background:#000;
}
.login input[type="submit"]:focus {
  border-color:#005eff;
}




</style>
</head>



<body>



<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
	  
             <a class="btn btn-outline-light  ml-5 mr-5" href="patdash.php" role="button"> <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>  Back</a>
			 
	 <a   class=navbar-brand text-warningfont weight-bold"> <h4 style= color:#FFFE00 ;> 24x7 Hospital   
		 <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
             <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                 
         </svg></h4>
    </a>
		 
 

  </nav><br><br>
  
<header>


<div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/imgg3.jpg  "bd-placeholder-img"  width="1600" height="500" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
	   <div class="container text-center headerset">
            <h3> WELCOME TO 24/7 </h3>
           <h1>Physical Fitness Is The First Requisite Of Happiness.</h1><br><br><br>
		   <button type="button" class="btn btn-danger">Support</button>
		   <button type="button" class="btn btn-warning">Care</button>
		   <button type="button" class="btn btn-success">Medical</button> 
		</div>
      </div>
    </div>
	
	
    <div class="carousel-item">
      <img src="images/img9.jpg  "bd-placeholder-img"  width="1600" height="500" class="d-block w-100" alt="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <h3> WELCOME TO 24/7   </h3>
        <h1>Each Patient Carries His Own Doctor</h1><br><br><br>
		<button type="button" class="btn btn-danger">Support</button>
		<button type="button" class="btn btn-warning">Care</button>
		<button type="button" class="btn btn-success">Medical</button>
		</div>
    </div>
	  
    
    <div class="carousel-item">
      <img src="images/imgg7.jpg "bd-placeholder-img"  width="1600" height="500" class="d-block w-100" alt="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h3>  WELCOME TO 24/7 </h3>
        <h1>A Good Physician Treats The Disease.</h3><br><br><br>
		<button type="button" class="btn btn-danger">Support</button>
		<button type="button" class="btn btn-warning">Care</button>
		<button type="button" class="btn btn-success">Medical</button>
		</div>
    </div>
    
 
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</header>



<head>
 <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>
</head>
<p hidden><?php echo"  WELCOME ". $_SESSION['username']; ?></p>
<p hidden><?php echo"  WELCOME ". $_SESSION['mno']; ?></p>

<?php
   $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'new';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   $a=$_SESSION['username'];
   $sql = "SELECT fname,lname FROM regp where username=' ".$a. " ' ";
    $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
          //     echo "<h3>WELCOME : " . $row["fname"]. "</h3><br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
  
<br><br>
<div class="login">
 <h2 class="login-header">  <b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Change My  Password  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></b></h2>

<center>
  <form  action=" " method="POST"   class="login-container">


   <p><input type="hidden"  value="<?php echo $_SESSION['username'] ?>"   id="username"  name="username"  required  ></p>
 
 <p><input type="text"  placeholder="Enter New Password" id="password"  name="password"  required  ></p>
<p><input type="text"  placeholder="Re-Enter New  Password"  id="newpassword1"  name="newpassword1" required  ></p>
  <p><input type="hidden"  value="<?php echo $_SESSION['mno'] ?>"   id="mno"  name="mno"  required  ></p>
   <p><input type="submit" value="update" name="update"></p><br>

</div>
  </form>
</center>

<br><br><br><br><br><br><br><br><br><br><br>

<?php

if(isset($_POST['update']))
{
  $conp=mysqli_connect("localhost", "root", "", "new");
  $username=$_POST['username'];
  $password=$_POST["password"];
  $cpassword=$_POST["newpassword1"];
  if($password==$cpassword)
  {
    $sql=" update regp set password=' " .$password." '   where  username=' ". $username." '  " ;
    $result=mysqli_query($conp, $sql); 
    if($result)
    { 
abc();
msd();
    echo "<script>alert('PASSWORD UPDATED')</script>";
    }
  }
  else
  {
    echo "<script>alert('PASSWORD NOT UPDATED')</script>";
   
  }
}
?>





<?php

function abc()
{
if(isset($_POST['update']))
{
require 'PHPMailer\PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                          

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com ;';  
$mail->SMTPAuth = true;                               
$mail->Username = 'prathamshirke17@gmail.com';                 
$mail->Password = 'shirkep@@97';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                   

$mail->setFrom('prathamshirke17@gmail.com', 'Prathamesh Shirke');
$mail->addAddress($_POST['username']);     
             // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                 
$mail->Subject = '24/7 Hospital';
$a="<h2>Patient Change Password Details</H2><br>Your New Password is  :".$_POST['password']."<br/>"."<br><h2>Thank You And Take Care</h2>";
$mail->Body    = $a;
//$mail->Body  =;
//$mail->AltBody = $_POST['age'];

if(!$mail->send()) {

    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 
    
}
}
}

?>
<?php

function msd()
{
if(isset($_POST['update']))
{
$mobile=$_POST['mno'];
$message="24/7 Hospital\nPatient Change Password Details\n Your New Password is:".$_POST['password']."\n THANK YOU AND TAKE CARE ";
$data = [
    'phone' => $mobile, 
    'body' => $message, 
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message

$url = 'https://eu118.chat-api.com/instance180970/message?token=mjjic65lvaif0n1j';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);
//print_r($result);
}
}

?>


<br><br>


  <footer class=" bg-primary text-white text-center text-lg-left">



<!-- Grid container -->
    <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"> About 24/7 </h5>

        <p>
      We are a team of young professionals who have put in efforts to bring the best doctors of pune  on one platform. 
	  24/7 is your online solution to search the best doctors in pune and book an appointment online.
	 </div>




<!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="contact.php" class="text-white">Contact</a>
          </li>
        
          </li>
        </ul>
      </div>
<!--Grid column-->





<!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="about.php" class="text-white">About</a>
          </li>
          </ul>
          </div>
<!--Grid column-->


          </div>
<!--Grid row-->
  </div>

<!-- Grid container -->






  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ©2020 Copyright:
    <a class="text-white" href="#">24/7 Hospital</a>
  </div>
  <!-- Copyright -->
</footer>

 
 
 
 
 
 

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>

