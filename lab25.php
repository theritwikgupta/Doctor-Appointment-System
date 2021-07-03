
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from ereg order by rid desc limit 1";
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
$dbname="event";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$string="abcdefghijklmnopqrstuvwxyzABCDEFGIJKLMNOPQRSTUVWXYZ1234567890!@#$&*";
$sa=substr(str_shuffle($string),0,6);
//echo $sa;
?>
<?php
$insert=false;
$servername="localhost";
$username="root";
$password="";
$dbname="event";
$conn=mysqli_connect($servername,$username,$password,$dbname);
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

if(! $conn)
{
  die("Connection Fail ".mysqli_connect_error());
}
$gg=$_POST['age'];
if(!preg_match('/^[0-9]*$/',$gg))
{
echo '<script>alert(" Please Enter Age in Number Only  ")</script>'; 
}
else
{
$m=$_POST['t4'];
if(!preg_match('/^[0-9]*$/',$m))
{
echo '<script>alert(" Please Enter Only Mobile Number  ")</script>'; 
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
echo '<script>alert("  Not a Valid Email Address   ")</script>'; 
}

else
{
$qq="insert into ereg VALUES ( '$rid',' $fname ',  ' $lname' ,' $age',  '$adde', '$_POST[gen]' , '$_POST[ename]' , ' $mno ',    ' $username ',      ' $password ') ";
 if(mysqli_query($conn, $qq))
{

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

  box-sizing: border-box;
  display: block;
  width: 70%;
  border-width: 1px;

  padding: 6px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

body {
	 background: linear-gradient(to right, #C9D0D1  0%,#C9D0D1   100%);
  margin-top: 0px;
  font-family: 'Open Sans', sans-serif; 
   no-repeat center center fixed;
   background-size: 100% 100%;
   height: 100%;
   position: absolute;
   width: 100%;
   
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
  width: 600px;
  margin: 10px auto;
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


 



<br><br><br>



<div class="login">
  <h2 class="login-header"> <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
</svg>  Event Registration</h2>
  <form  action="<?php echo ($_SERVER["PHP_SELF"]) ; ?>" method="post" class="login-container">
<center>   
 <p><input type="text"  name="rid" value="<?php echo $empid ?>"  readonly ></p>
  <p><input type="text" placeholder="Enter First Name" name="t1" required ></p>
 <p><input type="text" placeholder=" Enter Last Name" name="t2" required ></p>
<p><input type="text" placeholder="Enter Age" name="age" required ></p>
<p><input type="text" placeholder="Enter Address" name="t3" required ></p>
<div class="container">
    <select class="form-control" name="gen" style="width: 388px; font-size: 0.95em;" >
 <option Value=-1>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>  
      </select> 
 </div>
<?php
$hostname="localhost";
$username="root";
$password="";
$db="event";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select DISTINCT ename from eventname";
$result=mysqli_query($conn,$q);
?>
<div class="login-container">
<select class="form-control" id="ename"  name="ename" style="width: 388px; font-size: 0.95em;">
<?php  while ($row=mysqli_fetch_array($result)):; ?>
 
<option value="<?php echo $row['ename'];?>"><?php echo $row['ename']; ?></option>
<?php endwhile;?>
</select>
</div>


<p><input type="text" placeholder="Enter Mobile Number" name="t4" required ></p>

<p><input type="text" placeholder="Enter Email ID / Email ID is Username" name="t5" required ></p>
 <p><input type="password" placeholder=" Enter Password" name="t6" value="<?php echo $sa ?>"  required readonly></p>
 <p><input type="hidden" placeholder=" Precreption [For Doctor Only]" name="don"  readonly></p>
   <p><input type="submit" value="submit" name="submit"><br>
<a href="table.php">See List Of Event Participation List</a>
  </form>
</div>
</center>

<br><br><br>


