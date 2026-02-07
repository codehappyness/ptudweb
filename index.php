<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/bootstrap/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <title>Trang quản trị</title>

  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      background-color: #CCFFFF;

    }

    .container {
      text-align: center;
    }

    h1 {
      font-size: 30px;
      color: darkblue;
      margin-bottom: 20px;
      font-family: "Times new Roman";
    }

    .menu_item {
      display: flex;
      align-items: center;
      justify-content: start;
      padding: 20px;
      margin: 5px;
      background-color: white;
      border: 3px green;
      border-radius: 8px;
      width: 300px;
      text-decoration: none;
      color: #333;
      font-size: 20px;
    }

    .menu_item img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
    }
  </style>

</head>

<body>
  <div class="container">
    <h1>TRANG QUẢN TRỊ</h1>
    <a href="loaitin/loaitin_quanly.php" class="menu_item">
      <img src="assets/images/icon1.jpg" alt="Quản lý loại tin">
      Quản lý loại tin
    </a>
    <a href="tintuc/tintuc_quanly.php" class="menu_item">
      <img src="assets/images/icon2.png" alt="Quản lý tin tức">
      Quản lý tin tức
    </a>
    <a href="nguoidung/nguoidung_quanly.php" class="menu_item">
      <img src="assets/images/icon3.png">
      Quản lý người dùng 
    </a>
  </div>

</body>

</html>
