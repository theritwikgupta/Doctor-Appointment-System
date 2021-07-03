



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




table {
    font-family: Times new roman;
    border-collapse: collapse;
    width: 75%;
}

td, th {
    border: 2px solid DodgerBlue;
    text-align: center;
    padding: 8px;
    color:black;

}

tr:nth-child(even) {
    background-color: skyblue;
}
tr:nth-child(odd) {
    background-color: white;
}


</style>
</head>



<body>









<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">





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
 <h2 class="login-header"> <b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg> Search  Event & View Participants   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg></b></h2>

  <form  action=" " method="post"   class="login-container">
 

<?php
$hostname="localhost";
$username="root";
$password="";
$db="event";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select DISTINCT(ename) from ereg";
$result=mysqli_query($conn,$q);
?>
<div class="login-container">
<select class="form-control" id="ename"  name="ename" style="margin-left:97px; width:460px;">
<?php  while ($row=mysqli_fetch_array($result)):; ?>
 
<option value="<?php echo $row['ename'];?>"><?php echo $row['ename']; ?></option>
<?php endwhile;?>
</select>
</div>


   <p style="margin-left:97px; width:480px;"><input type="submit" value="Search" name="Search"  >
</div><br>
  </form>

<?php
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'event');
if(isset($_POST['Search']))
{
$q="select * from ereg where ename='$_POST[ename]'   ";
$qrun=mysqli_query($con,$q);
while($row=mysqli_fetch_array($qrun))
{
 ?>      

<?php
}
}
?>
<?php
include_once 'database1.php';
error_reporting(E_ALL & ~E_NOTICE);

$result = mysqli_query($conn,"SELECT  *  FROM ereg  where ename='$_POST[ename]' ");
?>
<!DOCTYPE html>
<html>

<center>
<h1>List Participants  </h1>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>  
  <tr>
<td><h3>Participant ID</h3></td>
<td><h3>First Name</h3></td>
<td><h3>Last Name</h3></td>
<td><h3>Age</h3></td>
<td><h3>Gender</h3></td>
<td><h3>Event</h3></td>
<td><h3>Mobile Number</h3></td>
<td><h3>Email</h3></td>
 

    
   
    
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>
 <td><?php echo $row["rid"]; ?></td>
  <td><?php echo $row["fname"]; ?></td>
  <td><?php echo $row["lname"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["ename"]; ?></td>
<td><?php echo $row["mno"]; ?></td>
  <td><?php echo $row["username"]; ?></td>

  
 
   

    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>






 
