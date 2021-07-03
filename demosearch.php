<?php
session_start();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conk=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from bookapp order by pid desc limit 1";
$result=mysqli_query($conk,$query);
$row=mysqli_fetch_array($result);
$lastid = $row['pid'];
if($lastid== "")
{
	$empid="PID1";
}
else
{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid="PID" . ($empid + 1);
}
?>




<html lang="en">
<head>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  


<style>

body {
  margin: 0px;
  font-family: 'Open Sans', sans-serif; 
  
   background: linear-gradient(to right, #C9D0D1  0%,#C9D0D1   100%);
   no-repeat center center fixed;
   background-size: 100% 100%;
   height: 100%;
   position: absolute;
   width: 100%;
   
}

.login-container {
     background: linear-gradient(to right, #9CA4FE  0%,#FF889A  100%);
  padding: 12px;
}

.container {
  position: relative;
  width: 70%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: DodgerBlue;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .59s ease;
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

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}
li {
  float: left;
}
li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 15px 50px;
  text-decoration: none;
color:black;
font-size:18px;
}
li a:hover:not(.active) {
  background-color: DodgerBlue;
}

* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  padding: 8px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

.login {
  width: 700px;
  margin: 20px auto;
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
  background:dodgerblue;
  padding: 18px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}


.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 10px;
  outline: 0;
  font-family: Times new roman;
  font-size: 0.95em;
font-weight: bold;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background:dodgerblue;
  border-color: transparent;
  color: white;
  cursor: pointer;
padding: 10px;

}

.login input[type="submit"]:hover {
  background: dodgerblue;
}
.login input[type="submit"]:focus {
  border-color: #000;
}


</style>
</head>



<body>



<header>


 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light  ml-5 mr-5" href="patdash.php" role="button">
			<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
<!-- Navbar -->




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







<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<p hidden><?php echo"  WELCOME ". $_SESSION['username']; ?></p>
<p hidden><?php echo"  WELCOME ". $_SESSION['fname']; ?></p>
<p hidden><?php echo"  WELCOME ". $_SESSION['lname']; ?></p>
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
             //  echo "<h3>WELCOME : " . $row["fname"]. "</h3><br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
<html>
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

<div class="login">
 <h2 class="login-header">  <b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  Search & Book Appointment  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></b></h2>

  <form  action=" " method="post"   class="login-container">
    <p>Select Date <input type="text" id="txtdate"  name="txtdate" required readonly ></p>
<?php
$hostname="localhost";
$username="root";
$password="";
$db="new";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select distinct(fname) from reg";
$result=mysqli_query($conn,$q);
?>
<div class="login-container">
Select Doctor<select class="form-control" id="fname"  name="fname">
<?php  while ($row=mysqli_fetch_array($result)):; ?>

<option value="<?php echo $row['fname'];?>"><?php echo $row['fname']; ?></option>
<?php endwhile;?>
</select>
</div>
</p>


<div class="login-container">
 Select Session<select class="form-control" id="sess" name="sess"  >

   <option>Morning 10.00 AM To 1.00 PM</option>
        <option>Afternoon 2.00 PM To 4.30 PM</option>
 <option>Evening 6.00 PM TO 8.30 PM</option>
 
 
      </select>

 </div>
<br>
   <p><input type="submit" value="Search" name="Search" ><br>
</div>
  </form>
  
  <br><br>

<?php
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'new');
if(isset($_POST['Search']))
{
$txtdate=$_POST['txtdate'];
$sess=$_POST['sess'];
$fname=$_POST['fname'];
$q="select * from setapp where setdate=' ".$txtdate." '  and   sess='$_POST[sess]'   and  doc='$_POST[fname]' ";
$qrun=mysqli_query($con,$q);
if($row=mysqli_fetch_array($qrun))
{
 ?>  


 
<div class="login">
 <h2 class="login-header"> <b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>  Book Appointment  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></b></h2>
 
<form  action=" " method="post"   class="login-container"> 
     
<label for="setdate">Selected Date</label>
<input type="text" name="setdate"  id="setdate" placeholder="Enter First Name" value="<?php echo $row['setdate']?>" readonly>

<label for="sess">Session Time</label>
   <input type="text" name="sess" id="sess"  placeholder="Enter First Name" value="<?php echo $row['sess']?>" readonly>
   
<label for="doc">Selected Doctor</label>
 <input type="text" name="doc" id="doc"  value="<?php echo $row['doc']?>" readonly>

 <input type="hidden" name="pid" id="pid" value="<?php echo $empid ?>"  readonly><br>
 <input type="submit" name="Book" value="Book" >


    <input type="hidden" name="username" placeholder="Enter username" value="<?php echo $row['setdate']?>" readonly/>
   <input type="hidden" name="setid"  placeholder="Enter First Name" value="<?php echo $row['setid']?>" readonly/>
     <p><input type="hidden" name="npl"   placeholder="Enter Last Name" value="<?php echo $row['npl']?>" readonly/>

 </form>
</div>


<?php
}
else
{
echo "<script>alert('Not Available This Date ')</script>";
}
}
?>

<br>


<?php
$cono=mysqli_connect("localhost","root","");
$df=mysqli_select_db($cono,'new');
if(isset($_POST['Book']))
{
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$mno=$_SESSION['mno'];
$username=$_SESSION['username'];
$setid=$_POST['setid'];
$setdate=$_POST['setdate'];
$doc=$_POST['doc'];
$sess=$_POST['sess'];
$pid=$_POST['pid'];
if($_POST['npl']==0)
{
 echo "<script>alert('SORRY APPOINTMENT IS FULL ')</script>";
}
else
{	
$sql_u = "SELECT * FROM bookapp WHERE username='$_SESSION[username]' AND setdate='$_POST[setdate]' ";
$res_u = mysqli_query($cono, $sql_u);
if (mysqli_num_rows($res_u) > 0) 
{
  echo "<script>alert('  ALREDY YOU BOOK THIS APPOINTMENT  SESSION')</script>";	  	
  	}
else
{
$rr="INSERT INTO `bookapp`  (fname,lname,mno,username,setid,setdate,doc,sess,pid) VALUES ('$_SESSION[fname]','$_SESSION[lname]','$_SESSION[mno]','$_SESSION[username]','$_POST[setid]','$_POST[setdate]','$_POST[doc]','$_POST[sess]','$_POST[pid]')";
$qw=mysqli_query($cono,$rr);
$po="UPDATE `setapp` SET npl=npl-1 where setid='$_POST[setid] ' " ;
$ww=mysqli_query($cono,$po);

if($qw)
{
abc();
msd();
echo "<script>alert('APPOINTMENT  BOOKED')</script>";
}
else 
{
echo "<script>alert(' APPOINTMENT NOT BOOKED')</script>";
}
}
}
}
?>
<?php
function abc()
{
if(isset($_POST['Book']))
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
$mail->addAddress($_SESSION['username']);     
             // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                 
$mail->Subject = '24/7 Hospital';
$a="<h2>Patient Appointment Details</H2><br>First  Name:".$_SESSION['fname']."<br/>". "Last Name:".$_SESSION['lname']."<br/>". "Date (mm/dd/yyyy):".$_POST['setdate']."<br/>". "Doctor :".$_POST['doc']."<br/>". "Session TimeSlot :".$_POST['sess']."<br>"."Token ID:".$_POST['pid']."<br>". "<br><h2>Thank You And Take Care</h2>";
$mail->Body    = $a;

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
if(isset($_POST['Book']))
{
$mobile=$_SESSION['mno'];
$message="24/7 Hospital\nPatient Appointment  Details\n First Name:".$_SESSION['fname']."\nLast  Name :".$_SESSION['lname']."\nDate (mm/dd/yyyy) :".$_POST['setdate']."\nDoctor Dr :".$_POST['doc']."\nSession TimeSlot :".$_POST['sess']."\nToken ID :".$_POST['pid']."\n THANK YOU AND TAKE CARE ";
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




 <footer class="bg-primary text-white text-center text-lg-left">
<!-- Grid container -->
    <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
    <center>  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        
		<h3 class="text-uppercase"> About 24/7 </h3>

   <p>
      We are a team of young professionals who have put in efforts to bring the best doctors of pune  on one platform. 
	  24/7 is your online solution to search the best doctors in pune and book an appointment online.
  </p>
     </div></center>

  </div>
<!--Grid row-->
  </div>

<!-- Grid container -->




  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
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




