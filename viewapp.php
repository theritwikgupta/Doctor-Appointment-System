﻿<?php
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


 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light  ml-5 mr-5" href="patdash.php" role="button"><svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg>   Back</a>

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
</header><br><br>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


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

<p hidden><?php $_SESSION['username']; ?></p>
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
               echo "<center><h3>Welcome: " . $row["fname"]. "</h3></center>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>

<br>


<div class="login">
 <h2 class="login-header"><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>  Search and View Appointment  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></b></h2>

  <form  action=" " method="post"   class="login-container">
    <p  style="margin-left:100px; width:670px;">Select Date to View My Appointment<input type="text" id="txtdate"  name="txtdate" required readonly ></p>
 
   <p  style="margin-left:100px; width:670px;"><input type="submit" value="Search" name="Search">
</div>
  </form>
<br><br><br>


<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'new');
if(isset($_POST['Search']))
{
$txtdate=$_POST['txtdate'];
$username=$_SESSION['username'];
$q="select * from bookapp where setdate=' ".$txtdate." '   and  username='$_SESSION[username]' ";
$qrun=mysqli_query($con,$q);
if($row=mysqli_fetch_array($qrun))
{
 ?>  

 
<div class="login">
 <h2 class="login-header"> <b><svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>  Print Appointment  <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg></b></h2>
 
<form  action="apptoken.php " method="post"   class="login-container"> 
     

 <input style="margin-left:100px;" type="hidden" name="fname" placeholder="Enter username" value="<?php echo $row['fname']?>" readonly/>

<input style="margin-left:100px;" type="hidden" name="lname" placeholder="Enter username" value="<?php echo $row['lname']?>" readonly/>

 <input style="margin-left:100px;"  type="hidden" name="username" placeholder="Enter username" value="<?php echo $row['username']?>" readonly/>
<label style="margin-left:100px;" for="setdate">Date</label>
<input style="margin-left:100px;" type="text" name="setdate"  id="setdate" placeholder="Enter First Name" value="<?php echo $row['setdate']?>" readonly>
<label style="margin-left:100px;" for="sess">Session Time</label>
   <input style="margin-left:100px;" type="text" name="sess" id="sess"  placeholder="Enter First Name" value="<?php echo $row['sess']?>" readonly>
<label style="margin-left:100px;" for="doc">Doctor</label>
 <input style="margin-left:100px;"   type="text" name="doc" id="doc"  value="<?php echo $row['doc']?>" readonly>
<label style="margin-left:100px;" for="pid">Token ID</label>
 <input style="margin-left:100px;"  type="text" name="pid" id="pid"  value="<?php echo $row['pid']?>" readonly> <br>
<input style="margin-left:100px;" type="submit" name="Print" value="Print"><br>
 
 </form>

</div>


<?php
}
else
{
echo "<script>alert('Data Not Avilable')</script>";
}
}
?>

<br><br><br><br><br>
<br>



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
     </div><center>

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



