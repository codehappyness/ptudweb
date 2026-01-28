
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Footer Bootstrap 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        footer {
            background-color: #2c3e50; /* màu nền */
            color: #ecf0f1;           /* màu chữ */
            padding: 20px 0;
            margin-top: 30px;
        }
        footer a {
            color: #ecf0f1;
        }
        footer a:hover {
            color: #f1c40f;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Nội dung trang -->
<div class="container">
    <h1>Nội dung trang</h1>
    <p>Demo footer Bootstrap 3</p>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Giới thiệu</h4>
                <p>Trang tin tức tổng hợp</p>
            </div>

            <div class="col-sm-4">
                <h4>Liên kết</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>

            <div class="col-sm-4">
                <h4>Liên hệ</h4>
                <p>Email: example@gmail.com</p>
                <p>Hotline: 0123 456 789</p>
            </div>

        </div>

        <hr style="border-color:#7f8c8d">

        <div class="text-center">
            © 2026 - Bản quyền thuộc về bạn
        </div>
    </div>
</footer>

</body>
</html>
