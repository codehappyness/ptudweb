<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Menu Website + Mega Menu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --pg-red: #b30000;
      --pg-dark: #222;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* HEADER */
    .pg-header {
      background: #fff;
      border-bottom: 2px solid var(--pg-red);
    }

    .navbar-brand {
      font-weight: 700;
      color: var(--pg-red) !important;
    }

    /* MENU */
    .navbar-nav .nav-link {
      font-weight: 600;
      color: var(--pg-dark);
      padding: 18px 16px;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: var(--pg-red);
    }

    /* ===== DROPDOWN LEVEL 2 & 3 ===== */
    .dropdown-menu {
      border-radius: 0;
      border: none;
      box-shadow: 0 8px 25px rgba(0,0,0,.15);
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-left: 0;
    }

    @media (min-width: 992px) {
      .dropdown:hover > .dropdown-menu {
        display: block;
      }
      .dropdown-submenu:hover > .dropdown-menu {
        display: block;
      }
    }

    /* ===== MEGA MENU ===== */
    .pg-mega {
      position: static;
    }

    .pg-mega-menu {
      width: 100%;
      left: 0;
      right: 0;
      padding: 30px 0;
      background: #fff;
    }

    .mega-title {
      font-weight: 700;
      color: var(--pg-red);
      margin-bottom: 12px;
      font-size: 15px;
      text-transform: uppercase;
    }

    .pg-mega-menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .pg-mega-menu ul li {
      margin-bottom: 8px;
    }

    .pg-mega-menu ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      font-size: 14px;
    }

    .pg-mega-menu ul li a:hover {
      color: var(--pg-red);
      padding-left: 6px;
    }

    /* MOBILE */
    @media (max-width: 991px) {
      .dropdown-submenu > .dropdown-menu {
        left: 0;
      }

      .pg-mega-menu {
        position: static;
        padding: 15px;
        box-shadow: none;
      }
    }

    /* DEMO CONTENT */
    .demo-content {
      padding: 80px 0;
      text-align: center;
      background: #f8f9fa;
    }
  </style>
</head>

<body>

<!-- HEADER -->
<header class="pg-header sticky-top">
  <nav class="navbar navbar-expand-lg">
    <div class="container">

      <a class="navbar-brand" href="#">PHAN GIA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a class="nav-link active" href="#">Trang chủ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>

          <!-- DROPDOWN 3 CẤP -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Công trình</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nhà phố</a></li>

              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Biệt thự</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Biệt thự phố</a></li>

                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#">Biệt thự nghỉ dưỡng</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Ven biển</a></li>
                      <li><a class="dropdown-item" href="#">Trên núi</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li><a class="dropdown-item" href="#">Nhà xưởng</a></li>
            </ul>
          </li>

          <!-- MEGA MENU -->
          <li class="nav-item dropdown pg-mega">
            <a class="nav-link dropdown-toggle" href="#">Dịch vụ</a>

            <div class="dropdown-menu pg-mega-menu">
              <div class="container">
                <div class="row g-4">

                  <div class="col-lg-3">
                    <div class="mega-title">Quảng cáo</div>
                    <ul>
                      <li><a href="#">Biển quảng cáo</a></li>
                      <li><a href="#">Hộp đèn</a></li>
                      <li><a href="#">LED - Neon</a></li>
                      <li><a href="#">Billboard</a></li>
                    </ul>
                  </div>

                  <div class="col-lg-3">
                    <div class="mega-title">Thiết kế</div>
                    <ul>
                      <li><a href="#">Logo</a></li>
                      <li><a href="#">Nhận diện thương hiệu</a></li>
                      <li><a href="#">Banner</a></li>
                      <li><a href="#">3D phối cảnh</a></li>
                    </ul>
                  </div>

                  <div class="col-lg-3">
                    <div class="mega-title">In ấn</div>
                    <ul>
                      <li><a href="#">In Hiflex</a></li>
                      <li><a href="#">In Decal</a></li>
                      <li><a href="#">In PP</a></li>
                      <li><a href="#">In UV</a></li>
                    </ul>
                  </div>

                  <div class="col-lg-3">
                    <div class="mega-title">Thi công</div>
                    <ul>
                      <li><a href="#">Bảng hiệu</a></li>
                      <li><a href="#">Showroom</a></li>
                      <li><a href="#">Mặt tiền</a></li>
                      <li><a href="#">Bảo trì</a></li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Tin tức</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Liên hệ</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- DEMO -->
<div class="demo-content">
  <h1>Nội dung website</h1>
  <p>Scroll & hover menu để xem hiệu ứng</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Enable submenu click on mobile
  document.querySelectorAll('.dropdown-submenu > a').forEach(el => {
    el.addEventListener('click', function (e) {
      if (window.innerWidth < 992) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle('show');
      }
    });
  });
</script>

</body>
</html>
