<html>
   <head>
      <title>Selecting Table in MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'new';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT * FROM regp';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["fname"]. "<br>";
echo "Name: " . $row["lname"]. "<br>";
echo "Name: " . $row["age"]. "<br>";
echo "Name: " . $row["username"]. "<br>";
echo "Name: " . $row["password"]. "<br>";
echo "Name: " . $row["prec"]. "<br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
   </body>
</html>

<html>
   <head>
      <title>Selecting Table in MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'new';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT * FROM bookapp';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["fname"]. "<br>";
echo "Name: " . $row["lname"]. "<br>";
echo "Name: " . $row["setdate"]. "<br>";
echo "Name: " . $row["username"]. "<br>";
echo "Name: " . $row["pid"]. "<br>";
echo "Name: " . $row["sess"]. "<br>";
echo "Name: " . $row["setid"]. "<br>";
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
   </body>
</html>
<html>
   <head>
      <title>Selecting Table in MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'new';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT * FROM presc';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["fname"]. "<br>";
echo "Name: " . $row["lname"]. "<br>";
echo "Name: " . $row["age"]. "<br>";
echo "Name: " . $row["username"]. "<br>";
echo "Name: " . $row["prsc1"]. "<br>";
echo "Name: " . $row["presc"]. "<br>";

            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
   </body>
</html>

<html>
   <head>
      <title>Selecting Table in MySQLi Server</title>
   </head>

   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'new';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully<br>';
         $sql = 'SELECT * FROM reg';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["fname"]. "<br>";
echo "Name: " . $row["lname"]. "<br>";
echo "Name: " . $row["age"]. "<br>";
echo "Name: " . $row["username"]. "<br>";
echo "Name: " . $row["password"]. "<br>";

            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>
   </body>
</html>
