<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Phan Gia Header</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
      background: #fff;
    }

    /* ===== TOP BAR ===== */
    .pg-topbar {
      background: var(--pg-yellow);
      font-size: 14px;
    }

    .pg-topbar a {
      color: var(--pg-text-dark);
      text-decoration: none;
    }

    /* SEARCH */
    .pg-search input {
      height: 32px;
      border-radius: 4px 0 0 4px;
      border: 1px solid var(--pg-red);
    }

    .pg-search button {
      background: var(--pg-red);
      color: #fff;
      border: none;
      padding: 0 12px;
      border-radius: 0 4px 4px 0;
    }

    /* ===== NAVBAR ===== */
    .pg-navbar {
      background: var(--pg-red);
    }

    .pg-navbar .navbar-brand img {
      height: 80px;
    }

    .pg-navbar .nav-link {
      color: #fff !important;
      font-weight: 600;
      padding: 1rem 1.2rem;
      text-transform: uppercase;
    }

    .pg-navbar .nav-link:hover,
    .pg-navbar .nav-link.active {
      background: var(--pg-yellow);
      color: var(--pg-text-dark) !important;
    }

    /* ===== DROPDOWN ===== */
    .pg-dropdown .dropdown-menu {
      border: none;
      border-radius: 0;
      margin-top: 0;
      padding: 0;
      box-shadow: 0 6px 20px rgba(0, 0, 0, .15);
    }

    .pg-dropdown .dropdown-item {
      padding: 10px 18px;
      font-weight: 500;
      color: var(--pg-text-dark);
    }

    .pg-dropdown .dropdown-item:hover {
      background: var(--pg-yellow);
      color: var(--pg-text-dark);
    }

    /* SUBMENU LEVEL 2 + 3 */
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: 0;
      display: none;
    }

    /* Hover desktop */
    @media (min-width: 992px) {
      .dropdown-submenu:hover>.dropdown-menu {
        display: block;
      }
    }

    /* Icon mũi tên */
    .dropdown-submenu>a::after {
      content: "›";
      float: right;
      margin-left: 10px;
    }

    /* Hover mở submenu (Desktop) */
    @media (min-width: 992px) {
      .pg-dropdown:hover .dropdown-menu {
        display: block;
      }
    }

    /* Mobile */
    @media (max-width: 991px) {
      .pg-navbar .nav-link {
        padding: 0.75rem 1rem;
      }
    }
  </style>
</head>

<body>

  <!-- ===== TOP BAR ===== -->
  <div class="pg-topbar py-1">
    <div class="container d-flex justify-content-end align-items-center gap-3 flex-wrap">
      <span><i class="bi bi-telephone"></i> 0918 17 37 77</span>
      <span><i class="bi bi-envelope"></i> quangcaophangia@gmail.com</span>
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-google"></i></a>

      <form class="pg-search d-flex ms-2">
        <input type="text" class="form-control" placeholder="Tìm kiếm...">
        <button type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>

  <!-- ===== NAVBAR ===== -->
  <nav class="navbar navbar-expand-lg pg-navbar">
    <div class="container">

      <!-- LOGO -->
      <a class="navbar-brand" href="/">
        <img src="logo.png" alt="Phan Gia">
      </a>

      <!-- TOGGLE MOBILE -->
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#pgMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENU -->
      <div class="collapse navbar-collapse" id="pgMenu">

<ul class="navbar-nav ms-auto">

  <li class="nav-item">
    <a class="nav-link active" href="/">Trang chủ</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/gioi-thieu">Giới thiệu</a>
  </li>

  <!-- MENU 3 CẤP -->
  <li class="nav-item dropdown pg-dropdown">
    <a class="nav-link dropdown-toggle" href="/dich-vu">Dịch vụ</a>

    <ul class="dropdown-menu">

      <!-- CẤP 2 -->
      <li class="dropdown-submenu">
        <a class="dropdown-item dropdown-toggle" href="#">
          Quảng cáo
        </a>

        <!-- CẤP 3 -->
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Biển quảng cáo</a></li>
          <li><a class="dropdown-item" href="#">Hộp đèn</a></li>
          <li><a class="dropdown-item" href="#">LED – Neon</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="dropdown-item dropdown-toggle" href="#">
          Thiết kế
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Logo</a></li>
          <li><a class="dropdown-item" href="#">Bộ nhận diện</a></li>
        </ul>
      </li>

      <li><a class="dropdown-item" href="#">In ấn</a></li>
      <li><a class="dropdown-item" href="#">Thi công</a></li>

    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/cong-trinh">Công trình</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/tin-tuc">Tin tức</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/tuyen-dung">Tuyển dụng</a>
  </li>

</ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link active" href="/">Trang chủ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/gioi-thieu">Giới thiệu</a>
          </li>

          <!-- MENU 2 CẤP -->
          <li class="nav-item dropdown pg-dropdown">
            <a class="nav-link dropdown-toggle" href="/dich-vu" role="button">
              Dịch vụ
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Quảng cáo</a></li>
              <li><a class="dropdown-item" href="#">Thiết kế</a></li>
              <li><a class="dropdown-item" href="#">In ấn</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Thi công</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/cong-trinh">Công trình</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/tin-tuc">Tin tức</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/tuyen-dung">Tuyển dụng</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.querySelectorAll('.dropdown-submenu > a').forEach(function(el) {
      el.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
          e.preventDefault();
          e.stopPropagation();
          let submenu = this.nextElementSibling;
          submenu.classList.toggle('show');
        }
      });
    });
  </script>
</body>

</html>
