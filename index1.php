<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHAN GIA - Nội thất | Sự kiện | Quảng cáo</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/bootstrap/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <style>
    :root {
      --bs-primary: #9E2B23; /* giữ nguyên brand primary */
      --bs-secondary: #E53935;
      --bs-warning: #F8E71C;
      --bs-info: #0890FF;
      --bs-danger: #E53935;
      --bs-light: #FFF9C4;
      --bs-dark: #7A1E14;
    }
    body { background: #FFF9C4; }
    .hero {
      background: linear-gradient(#F8E71C, #F6DF18);
      padding: 80px 0;
      border-bottom: 6px solid var(--bs-primary);
    }
    .service-card {
      border: 2px solid var(--bs-primary);
      transition: 0.3s;
    }
    .service-card:hover {
      border-color: var(--bs-secondary);
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    footer {
      background: #7A1E14;
      color: #F8E71C;
      padding: 40px 0;
    }
  </style>
</head>
<body>
  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="logo.png" alt="PHAN GIA" style="height:80px; width:auto;" class="me-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="#dichvu">Dịch vụ</a></li>
          <li class="nav-item"><a class="nav-link" href="#sanpham">Sản phẩm</a></li>
          <li class="nav-item"><a class="nav-link" href="#lienhe">Liên hệ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero text-center">
    <div class="container">
      <h1 class="display-4 fw-bold" style="color: var(--bs-primary)">PHAN GIA CẦN THƠ</h1>
      <p class="lead fw-semibold mt-3" style="color: var(--bs-dark)">Nội thất - Sự kiện - Quảng cáo</p>
      <a href="#lienhe" class="btn btn-primary btn-lg mt-4">Liên hệ ngay</a>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="dichvu" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold" style="color: var(--bs-dark)">Dịch vụ của chúng tôi</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-card p-4 text-center rounded-3 bg-light">
            <h4 class="fw-bold"><i class="bi bi-brush me-2"></i>Thi công nội thất</h4>
            <p>Thiết kế - thi công nội thất chuyên nghiệp, bền đẹp và thẩm mỹ.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card p-4 text-center rounded-3 bg-light">
            <h4 class="fw-bold"><i class="bi bi-calendar-event me-2"></i>Tổ chức sự kiện</h4>
            <p>Dựng sân khấu, backdrop, booth và tổ chức các chương trình trọn gói.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card p-4 text-center rounded-3 bg-light">
            <h4 class="fw-bold"><i class="bi bi-megaphone me-2"></i>Thi công quảng cáo</h4>
            <p>Làm bảng hiệu, hộp đèn, chữ nổi mica, alu và các hạng mục quảng cáo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="lienhe" class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-3" style="color: var(--bs-primary)">Liên hệ</h2>
      <p class="mb-4">Hotline & Zalo:</p>
      <h3 class="fw-bold text-danger">0901 097 393 - 0937 676 565 - 0972 173 777</h3>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-center">
    <div class="container">
      <p class="mb-1 fw-bold">PHAN GIA - Gìn chữ tín, giữ niềm tin</p>
      <small>© 2025 Phan Gia Can Tho</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
