<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restro_db";
$conn = new mysqli($servername,$username,$password, $dbname) or die("Connection failed: " . $conn->connect_error);

if($conn->connect_error)
// {
//    echo "Error in connecting Database";
//  }
 
//    else {
//   	echo "Database Connection Done.";
//   }

 ?>