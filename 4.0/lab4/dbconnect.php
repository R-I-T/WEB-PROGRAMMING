 <?php
$servername = "117.232.108.35";
$username = "21mca02";
$password = "21mca02";
$database = "db2";

// Create connection
$conn = new mysqli($servername, $username, $password,$database,"8000");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?> 
