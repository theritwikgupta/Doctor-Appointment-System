
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from regp order by rid desc limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$lastid = $row['rid'];
if($lastid== "")
{
	$empid="RID1";
}
else
{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid="RID" . ($empid + 1);
}
?>
<?php
$insert=false;
$servername="localhost";
$username="root";
$password="";
$dbname="new";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$string="abcdefghijklmnopqrstuvwxyzABCDEFGIJKLMNOPQRSTUVWXYZ1234567890!@#$&*";
$sa=substr(str_shuffle($string),0,6);
echo $sa;
?>
<?php
if(isset($_POST['submit']))
{
$rid=$_POST['rid'];
$age=$_POST['age'];
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$adde=$_POST['t3'];
$mno=$_POST['t4'];
$username=$_POST['t5'];
$password=$_POST['t6'];
$prec=$_POST['don'];
if(! $conn)
{
  die("Connection Fail ".mysqli_connect_error());
}
$gg=$_POST['age'];
if(!preg_match('/^[0-9]*$/',$gg))
{
echo '<script>alert(" Please Enter Age In  Number Only  ")</script>'; 
}
else
{
$m=$_POST['t4'];
if(!preg_match('/^[0-9]*$/',$m))
{
echo '<script>alert(" Please Enter Proper Mobile Number  ")</script>'; 
}
elseif(strlen($m)<12)
{
echo '<script>alert(" Please Enter Proper Mobile Number  ")</script>'; 
}
elseif(strlen($m)>12)
{
echo '<script>alert(" Please Enter Proper Mobile Number  ")</script>'; 
}
else
{
$n=$_POST['t1'];
if(!preg_match("/^[a-zA-Z\s]+$/",$n))
{
echo '<script>alert(" Please Enter First Name As Only String  ")</script>'; 
}
else
{
$nn=$_POST['t2'];
if(!preg_match("/^[a-zA-Z\s]+$/",$nn))
{
echo '<script>alert(" Please Enter Last Name As Only String  ")</script>'; 
}
else
{
$email = $_POST['t5'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
{
echo '<script>alert("  not a valid email address   ")</script>'; 
}

else
{
$qq="insert into regp VALUES ( '$rid',' $fname ',  ' $lname' ,' $age',  '$adde', '$_POST[gen]' , '$_POST[bg]' , ' $mno ',    ' $username ',      ' $password ','$prec') ";
 if(mysqli_query($conn, $qq))
{
abc();
msd();
echo '<script>alert(" Thank You ! Your Data Inserted Sucessfully!   ")</script>'; 
}
else 
{
echo '<script>alert("Sorry !Your Data Not Inserted ")</script>'; 
}
}
}
}
}
}
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
body {
  margin: 0;
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
body {
  background: white;
  font-family: 'Open Sans', sans-serif;
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

.login-container {
  background: #ebebeb;
  padding: 18px;
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







table {
  border-collapse: collapse;
  width: 70%;
  border: 5px light black;
}




th, td 
{
  text-align: center;
  padding: 8px;
font-family: Times new roman;
  
font-weight: bold;
}

tr:nth-child(even) {
	background-color:powderblue;}

</style>
</head>



<body>



<header>


 <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light  ml-5 mr-5" href="recp.php" role="button">Back</a>
<a class="btn btn-outline-light  ml-5 mr-5" href="patupdate.php" role="button">Update Patient </a>
<a class="btn btn-outline-light  ml-5 mr-5" href="patdelete.php" role="button">Delete Patient </a>

  </nav>
   


  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image:url('https://www.ofx.com/-/media/images_for_modules/modules/ml018%20-%20generic%20hero/blog/cs-342%20medical-tourisim-header-1600x600.ashx?hash=B1C009ADE22C991B6EB2EE16AA546F67.jpg');
      height: 300px;
      margin-top: 50px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">24/7 Hospital</h1>
          <h4 class="mb-3">Best Online  Doctor Appointment In Pune</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            >Contact Us</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>







<br><br>
  <br><br>
<div class="login">
  <h2 class="login-header"> Patient Registration</h2>
  <form  action="<?php echo ($_SERVER["PHP_SELF"]) ; ?>" method="post" class="login-container">
<center>   
 <p><input type="text"  name="rid" value="<?php echo $empid ?>"  readonly ></p>
  <p><input type="text" placeholder="Enter First Name" name="t1" required ></p>
 <p><input type="text" placeholder=" Enter Last Name" name="t2" required ></p>
<p><input type="text" placeholder="Enter Age" name="age" required ></p>
<p><input type="text" placeholder="Enter Address" name="t3" required ></p>
<div class="container">
      <select class="form-control" name="gen"   >
 <option Value=-1>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>  
      </select> 
 </div>
<br>
<div class="container">
    <select class="form-control" name="bg"   >
  <option value=-1>Select Blood Group</option>
        <option>O+</option>
        <option>O-</option>
 <option>A+</option>
 <option>A-</option>
 <option>B+</option>
 <option>B-</option>
 <option>AB+</option>
 <option>AB-</option>
 <option>Don't Know</option>
      </select>
 </div>


<p><input type="text" placeholder="Enter Mobile Number" name="t4" required ></p>

<p><input type="text" placeholder="Enter Email ID / Email ID is Username" name="t5" required ></p>
    <p><input type="password" placeholder=" Enter Password" name="t6"  value="<?php echo $sa ?>" required></p>
 <p><input type="hidden" placeholder=" Precreption [For Doctor Only]" name="don"  readonly></p>
   <p><input type="submit" value="submit" name="submit">
  </form>
</div>
</center>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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
<?php
function abc()
{
if(isset($_POST['submit']))
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
$mail->addAddress($_POST['t5']);     
             // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');


$mail->isHTML(true);                                 
$mail->Subject = '24/7 Hospital';
$a="<h2>Patient Registration Details</H2><br>Patient ID :".$_POST['rid']."<br/>"."First  Name :".$_POST['t1']."<br/>". "Last Name :".$_POST['t2']."<br/>". "Age :".$_POST['age']."<br/>". "Address :".$_POST['t3']."<br/>". "Gender :".$_POST['gen']."<br>"."Blood Group :".$_POST['bg']."<br>"."Password :".$_POST['t6']."<br><h2>Thank You And Take Care</h2>";
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
if(isset($_POST['submit']))
{
$mobile=$_POST['t4'];
$message="24/7 Hospital\nPatient Registration Details\n ID:".$_POST['rid']."\nFirst Name :".$_POST['t1']."\nLast Name :".$_POST['t2']."\nAge :".$_POST['age']."\nAddress :".$_POST['t3']."\nBlood Group :".$_POST['bg']."\nGender :".$_POST['gen']."\nPassword :".$_POST['t6']."\n THANK YOU AND TAKE CARE ";
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