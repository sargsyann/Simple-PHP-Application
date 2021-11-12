 <?php
$servername = "mysql"; // Server name where the app has the DB
$username = "devuser"; // user of the DB 
$password = "devpass"; // password of the DB
$dbname = "devdb"; // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 