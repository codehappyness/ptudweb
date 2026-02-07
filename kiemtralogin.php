<?php
session_start();

// Kiem tra neu chua dang nhap thi dieu houng ve login
if (!isset($_SESSION['user_id'])) {
  # code...
  header('Location: login.php');
  exit();
}

?>
