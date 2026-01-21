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
    .top-info {
      font-size: 14px;
      color: #1c75bc;
    }

    .search-box input {
      border: 1px solid #ccc;
      height: 32px;
    }

    .search-box button {
      background: #0089d7;
      color: #fff;
      border: none;
      height: 32px;
      width: 40px;
    }

    .main-menu {
    }

    .main-menu a {
      padding: 12px 20px;
      display: inline-block;
      color: #0d4e7a;
      font-weight: 600;
    }

    .main-menu a.active {
      background: #0089d7;
      color: #fff !important;
    }

    .logo-title {
      font-size: 14px;
      color: #d32626;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <!-- TOP HEADER -->
  <div class="container py-2">
    <div class="row align-items-center">
      <!-- Logo -->
      <div class="col-md-4 text-center text-md-start">
        <img src="logo.png" alt="Logo" style="height:70px;">
        <div class="fw-bold text-primary">CÔNG TY TNHH QUẢNG CÁO PHAN GIA</div>
      </div>
      <!-- Info + Social + Search -->
      <div class="col-md-8 text-end top-info">
        <div>
          <i class="bi bi-telephone"></i> Hotline: 0918 17 37 77 &nbsp;&nbsp;
          <i class="bi bi-envelope"></i> Email: quangcaophangia@gmail.com
          &nbsp;&nbsp;
          <a href="#"><i class="bi bi-facebook fs-5 text-primary"></i></a>
          &nbsp;
          <a href="#"><i class="bi bi-google fs-5 text-danger"></i></a>
        </div>
        <!-- Search -->
        <div class="search-box d-inline-flex mt-2">
          <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm...">
          <button><i class="bi bi-search"></i></button>
        </div>
        <!-- MENU -->
        <nav class="main-menu text-center">
          <a href="#" class="active">TRANG CHỦ</a>
          <a href="#">GIỚI THIỆU</a>
          <a href="#">DỊCH VỤ</a>
          <a href="#">CÔNG TRÌNH</a>
          <a href="#">TIN TỨC</a>
          <a href="#">TUYỂN DỤNG</a>
        </nav>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
