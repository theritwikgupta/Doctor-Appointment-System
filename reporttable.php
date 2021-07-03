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
.container {

  box-sizing: border-box;
  display: block;
  width: 70%;

  border-width: 1px;

  padding: 8px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
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

li 
{
  float: left;
}

li a 
{
  display: block;
  color: #666;
  text-align: center;
  padding: 15px 50px;
  text-decoration: none;
  color:black;
  font-size:18px;
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

.login-container {
  background: #ebebeb;
  padding: 12px;

 
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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
 text-align: center;
}
th {
  text-align: center;
}


</style>
</head>



<body>



<header>

 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light  ml-5 mr-5" href="recp.php" role="button">
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








<br><br>
<center>
<table style="width:75%">
  <tr>
    <th>File</th>
    <th>Action</th> 
    
  </tr>
<tr>
    <td>Report Of All Patient List Booked Appointments</td>
    <td><a href="allpatbooklist.php">Click Here</a></td>
  
  </tr>
  <tr>
    <td>Report of Session Wise And Date Wise Patients Booked Appointments</td>
    <td><a href="printsession.php">Click Here</a></td>
  
  </tr>
  <tr>
    <td>Individual Patient Appointment </td>
    <td><a href="bookview.php">Click Here</a></td>
    
  </tr>
  <tr>
    <td>All Patient List</td>
    <td><a href="mypdfone.php">Click Here</a></td>
    
  </tr>
<tr>
    <td>All Doctor List</td>
    <td><a href="docreport.php">Click Here</a></td>
    
  </tr>
<tr>
    <td>Patient Individual Bill</td>
    <td><a href="inbil.php">Click Here</a></td>
    
  </tr>
<tr>
    <td>Day Wise Bill Data  </td>
    <td><a href="daywise.php">Click Here</a></td>
    
  </tr>
<tr>

    <td>All Patient Bill List </td>
    <td><a href="billreport.php">Click Here</a></td>
    
  </tr>
</table>
 </center>  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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




