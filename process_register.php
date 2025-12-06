<?php

require_once 'dbcon.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password, email) values ('$username', '$password','$email')";

if(mysqli_query($conn, $sql)){
  echo "Register success";
}else{
  "Register fail";
}

mysqli_close(($conn));
