<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giao diện Bootstrap 5 mẫu</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }
        .service-box {
            padding: 30px;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid #eee;
            transition: 0.3s;
        }
        .service-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }
        footer {
            padding: 20px 0;
            background: #222;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-2"><a class="nav-link" href="#">Trang chủ</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#">Giới thiệu</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#">Dịch vụ</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="#">Liên hệ</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO BANNER -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold display-5">Tiêu đề chính của website</h1>
        <p class="mt-3 text-muted fs-5">Mô tả ngắn gọn và thu hút người xem.</p>
        <a href="#" class="btn btn-primary btn-lg mt-3">Xem thêm</a>
    </div>
</section>

<!-- 3 CỘT DỊCH VỤ -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="service-box text-center">
                    <i class="bi bi-star fs-1 text-primary"></i>
                    <h4 class="mt-3">Dịch vụ 1</h4>
                    <p class="text-muted">Mô tả nội dung dịch vụ ngắn gọn và dễ hiểu.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-box text-center">
                    <i class="bi bi-cpu fs-1 text-primary"></i>
                    <h4 class="mt-3">Dịch vụ 2</h4>
                    <p class="text-muted">Mô tả nội dung dịch vụ ngắn gọn và dễ hiểu.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-box text-center">
                    <i class="bi bi-people fs-1 text-primary"></i>
                    <h4 class="mt-3">Dịch vụ 3</h4>
                    <p class="text-muted">Mô tả nội dung dịch vụ ngắn gọn và dễ hiểu.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2025 - Thiết kế bởi bạn</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
