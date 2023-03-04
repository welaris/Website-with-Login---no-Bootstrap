<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_ubung";

$id =  $_REQUEST['id'];
$userPassword = $_REQUEST['password'];

// $hash = password_hash($userPassword, 
//           PASSWORD_DEFAULT);
$encrypted_pwd = md5($userPassword);
// echo $encrypted_pwd;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT * FROM kunde WHERE idKunde=$id AND password='$encrypted_pwd'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      header('Location: Home.html');
  }
?>