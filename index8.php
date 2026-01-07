<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header Phan Gia</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --pg-red-dark: #9E2525;
      --pg-red: #c62828;
      --pg-yellow: #FBD84C;
      --pg-text-dark: #5c0000;
    }

    .search-box input {
      border: 1px solid var(--pg-red-dark);
      height: 34px;
      border-radius: 3px 0 0 3px;
    }

    .search-box button {
      background: var(--pg-red-dark);
      color: #fff;
      width: 40px;
      height: 34px;
      border-radius: 0 3px 3px 0;
      border: none;
    }

    .main-menu {
      background: var(--pg-red-dark);
      border-bottom: 4px solid var(--pg-yellow);
    }

    .main-menu a {
      padding: 14px 26px;
      color: var(--pg-yellow);
      font-weight: bold;
      font-size: 15px;
      display: inline-block;
      text-transform: uppercase;
    }

    .main-menu a.active {
      background: var(--pg-yellow);
      color: var(--pg-text-dark) !important;
    }

    .main-menu a:hover {
      background: var(--pg-red);
      color: #fff;
    }
  </style>
</head>

<body>

  <div class="container py-1">

    <div class="row align-items-center">

      <!-- Logo -->
      <div class="col-md-3 text-center text-md-start">
        <img src="logo.png" alt="Logo" style="height:135px;">
      </div>

      <!-- Info + Search -->
      <div class="col-md-9 text-end">
        <div class="top-info">
          <i class="bi bi-telephone"></i>
          Hotline: 0901 097393 – 0937 676565 – 0972 173777 &nbsp;&nbsp;

          <i class="bi bi-envelope"></i>
          quangcaophangia@gmail.com &nbsp;&nbsp;

          <i class="bi bi-facebook fs-5 text-primary"></i>
          <i class="bi bi-chat-left-dots fs-5" style="color:#008fff;"></i>
        </div>

        <div class="search-box d-inline-flex mt-2">
          <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm...">
          <button><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>

    <!-- MENU (đặt dưới row → sát logo) -->
    <nav class="main-menu text-center">
      <a href="#" class="active">Trang chủ</a>
      <a href="#">Giới thiệu</a>
      <a href="#">Dịch vụ</a>
      <a href="#">Công trình</a>
      <a href="#">Tin tức</a>
      <a href="#">Tuyển dụng</a>
    </nav>

  </div>

</body>
</html>
