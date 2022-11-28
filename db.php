<?php 
//declaring and innitializing variable
$host = "127.0.0.1";
$user = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $user, $password, 'shop');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

$hasedPassword = password_hash('secret', PASSWORD_DEFAULT);
$sql ="INSERT INTO $user Values ('John okongo', 'john2@gmail.com', $hasedPassword)";

if ($conn->query($sql) == true){
    echo 'user created successfully';
}else{
    echo 'Failed to create user' .$conn->error;
}

?>