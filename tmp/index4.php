<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header Phan Gia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Màu thương hiệu */
    :root {
      --pg-red-dark: #A32E2E;
      --pg-red: #D62828;
      --pg-yellow: #FFE324;
      --pg-yellow-light: #FFE566;
      --pg-blue-zalo: #008FFF;
    }

    body {
      background: #fff;
      font-family: 'Roboto', sans-serif;
    }

    /* Top Info */
    .top-info {
      font-size: 14px;
      color: var(--pg-red-dark);
    }

    /* Search */
    .search-box input {
      border: 1px solid var(--pg-red-dark);
      height: 32px;
    }

    .search-box button {
      background: var(--pg-red-dark);
      color: #fff;
      border: none;
      height: 32px;
      width: 40px;
    }

    /* MENU */
    .main-menu {
      background: var(--pg-red-dark);
      border-bottom: 4px solid var(--pg-yellow);
    }

    .main-menu a {
      padding: 14px 22px;
      display: inline-block;
      color: var(--pg-yellow-light);
      font-weight: 600;
      text-transform: uppercase;
      font-size: 15px;
    }

    .main-menu a.active {
      background: var(--pg-yellow);
      color: var(--pg-red-dark) !important;
    }

    .main-menu a:hover {
      background: var(--pg-red);
      color: #fff;
    }
  </style>
</head>

<body>

  <!-- TOP HEADER -->
  <div class="container py-3">

    <div class="row align-items-center">

      <!-- Logo -->
      <div class="col-md-4 text-center text-md-start">
        <img src="logo.png" alt="Logo" style="height:80px;">
        <div class="fw-bold" style="color: var(--pg-red-dark); font-size: 15px;">
          CÔNG TY TNHH QUẢNG CÁO PHAN GIA
        </div>
      </div>

      <!-- Info + Social + Search -->
      <div class="col-md-8 text-end top-info">
        <div>
          <i class="bi bi-telephone"></i> Hotline: 0901 097393 – 0937 676565 – 0972 173777
          &nbsp;&nbsp;
          <i class="bi bi-envelope"></i> Email: quangcaophangia@gmail.com
          &nbsp;&nbsp;
          <i class="bi bi-facebook fs-5 text-primary"></i>
          &nbsp;
          <i class="bi bi-chat-left-dots fs-5" style="color: var(--pg-blue-zalo);"></i>
        </div>

        <!-- Search -->
        <div class="search-box d-inline-flex mt-2">
          <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm...">
          <button><i class="bi bi-search"></i></button>
        </div>
        <nav class="main-menu text-center">
          <a href="#" class="active">Trang chủ</a>
          <a href="#">Giới thiệu</a>
          <a href="#">Dịch vụ</a>
          <a href="#">Công trình</a>
          <a href="#">Tin tức</a>
          <a href="#">Tuyển dụng</a>
        </nav>
      </div>

    </div>
  </div>

  <!-- MENU -->

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
