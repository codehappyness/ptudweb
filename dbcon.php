<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbuser = "ptudweb";
$dbpassword = "MatKhauManh123";
$dbname = "ptudwebdb";

$conn = mysqli_connect($servername, $dbuser, $dbpassword, $dbname);

if(!$conn){
  die('Connection failed'.mysqli_connect_error());
}else{
  echo "Connection success";
}

mysqli_set_charset($conn, 'utf8');
