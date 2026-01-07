
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Header Phan Gia - Modern</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --pg-red: #C62828;
      --pg-red-dark: #9B1E1E;
      --pg-yellow: #F6D548;
      --pg-yellow-light: #FFE99F;
      --pg-gray: #555;
    }

    body {
      font-family: "Roboto", sans-serif;
    }

    /* Top Bar */
    .topbar {
      background: var(--pg-red-dark);
      color: #fff;
      font-size: 14px;
      padding: 6px 0;
    }

    .topbar a {
      color: #fff;
      text-decoration: none;
    }

    /* Header Section */
    .header-area {
      padding: 14px 0;
      border-bottom: 2px solid var(--pg-yellow);
    }

    .company-name {
      color: var(--pg-red-dark);
      font-size: 17px;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    /* Search */
    .search-box input {
      height: 38px;
      border-radius: 6px 0 0 6px;
      border: 1px solid var(--pg-red-dark);
    }

    .search-box button {
      width: 45px;
      height: 38px;
      border-radius: 0 6px 6px 0;
      border: none;
      background: var(--pg-red-dark);
      color: #fff;
    }

    /* Modern Menu */
    .main-menu {
      background: var(--pg-red);
    }

    .main-menu a {
      padding: 14px 22px;
      display: block;
      color: var(--pg-yellow-light);
      font-weight: 600;
      font-size: 15px;
      text-transform: uppercase;
      letter-spacing: 0.3px;
      transition: 0.2s;
    }

    .main-menu a:hover {
      background: var(--pg-red-dark);
      color: #fff;
    }

    .main-menu a.active {
      background: var(--pg-yellow);
      color: var(--pg-red-dark) !important;
    }
  </style>
</head>

<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="container d-flex justify-content-between">

      <div>
        <i class="bi bi-telephone"></i>
        Hotline: <strong>0901 097393 – 0937 676565 – 0972 173777</strong>
      </div>

      <div>
        <i class="bi bi-envelope"></i>
        <a href="mailto:quangcaophangia@gmail.com">
          quangcaophangia@gmail.com
        </a>
        &nbsp;&nbsp;
        <i class="bi bi-facebook fs-5"></i>
        <i class="bi bi-chat-left-dots fs-5" style="color:#008CFF"></i>
      </div>

    </div>
  </div>

  <!-- HEADER -->
  <div class="header-area">
    <div class="container">

      <div class="row align-items-center">

        <!-- Logo -->
        <div class="col-md-3 text-center text-md-start">
          <img src="logo.png" style="height:72px;" alt="Phan Gia Logo">
        </div>

        <!-- Company Name -->
        <div class="col-md-4 text-center d-none d-md-block">
          <div class="company-name">
            CÔNG TY TNHH QUẢNG CÁO PHAN GIA
          </div>
        </div>

        <!-- Search -->
        <div class="col-md-5 text-end">
          <div class="search-box d-inline-flex">
            <input class="form-control" placeholder="Nhập từ khóa tìm kiếm...">
            <button><i class="bi bi-search"></i></button>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- MENU -->
  <nav class="main-menu">
    <div class="container d-flex">

      <a class="active" href="#">Trang chủ</a>
      <a href="#">Giới thiệu</a>
      <a href="#">Dịch vụ</a>
      <a href="#">Công trình</a>
      <a href="#">Tin tức</a>
      <a href="#">Tuyển dụng</a>

    </div>
  </nav>

</body>
</html>
