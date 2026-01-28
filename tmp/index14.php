<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Phan Gia Header - Bootstrap 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Font Awesome (thay cho bootstrap-icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    :root {
      --pg-red: #9E2525;
      --pg-red-hover: #b52b2b;
      --pg-yellow: #FBD84C;
      --pg-text-dark: #600;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* ===== TOP BAR ===== */
    .pg-topbar {
      background: var(--pg-yellow);
      font-size: 14px;
      padding: 6px 0;
    }

    .pg-topbar span,
    .pg-topbar a {
      color: var(--pg-text-dark);
      margin-left: 15px;
      text-decoration: none;
    }

    .pg-search {
      display: inline-block;
      margin-left: 15px;
    }

    .pg-search input {
      height: 30px;
      border: 1px solid var(--pg-red);
      border-radius: 4px 0 0 4px;
      padding: 0 8px;
    }

    .pg-search button {
      height: 30px;
      background: var(--pg-red);
      border: none;
      color: #fff;
      padding: 0 12px;
      border-radius: 0 4px 4px 0;
    }

    /* ===== NAVBAR ===== */
    .pg-navbar {
      background: var(--pg-red);
      border: none;
      border-radius: 0;
      margin-bottom: 0;
    }

    .pg-navbar .navbar-brand img {
      height: 80px;
    }

    .pg-navbar .navbar-nav > li > a {
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      padding: 30px 18px;
    }

    .pg-navbar .navbar-nav > li > a:hover,
    .pg-navbar .navbar-nav > .active > a {
      background: var(--pg-yellow);
      color: var(--pg-text-dark);
    }

    /* ===== DROPDOWN ===== */
    .pg-navbar .dropdown-menu {
      border-radius: 0;
      padding: 0;
    }

    .pg-navbar .dropdown-menu > li > a {
      padding: 10px 18px;
      color: var(--pg-text-dark);
      font-weight: 500;
    }

    .pg-navbar .dropdown-menu > li > a:hover {
      background: var(--pg-yellow);
    }

    /* Hover dropdown (desktop) */
    @media (min-width: 768px) {
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    }
  </style>
</head>

<body>

<!-- ===== TOP BAR ===== -->
<div class="pg-topbar">
  <div class="container text-right">
    <span><i class="fa fa-phone"></i> 0918 17 37 77</span>
    <span><i class="fa fa-envelope"></i> quangcaophangia@gmail.com</span>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-google"></i></a>

    <form class="pg-search">
      <input type="text" placeholder="Tìm kiếm...">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-default pg-navbar">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pgMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">
        <img src="logo.png" alt="Phan Gia">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="pgMenu">
      <ul class="nav navbar-nav navbar-right">

        <li class="active"><a href="/">Trang chủ</a></li>
        <li><a href="/gioi-thieu">Giới thiệu</a></li>

        <li class="dropdown">
          <a href="/dich-vu" class="dropdown-toggle" data-toggle="dropdown">
            Dịch vụ <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Quảng cáo</a></li>
            <li><a href="#">Thiết kế</a></li>
            <li><a href="#">In ấn</a></li>
            <li class="divider"></li>
            <li><a href="#">Thi công</a></li>
          </ul>
        </li>

        <li><a href="/cong-trinh">Công trình</a></li>
        <li><a href="/tin-tuc">Tin tức</a></li>
        <li><a href="/tuyen-dung">Tuyển dụng</a></li>

      </ul>
    </div>
  </div>
</nav>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
