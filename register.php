<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/bootstrap/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    function validatePassword() {
      var password = document.getElementById('password').value;
      var repassword = document.getElementById('repassword').value;

      var message = document.getElementById('error_message');
      if (password === repassword) {
        message.textContent = "";
        return true;
      } else {
        message.textContent = "Mật khẩu nhập vào không khớp";
        return false;
      }
    }
  </script>
</head>

<body>

  <?php
  /** @var mysqli $conn */
  require_once 'dbcon.php'; // Kết nối CSDL

  // Kiểm tra xem request có phải POST không
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Lấy dữ liệu từ form
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $mess = '';

    // Mã hoá mật khẩu trước khi lưu
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    (strlen($hashedpassword));

    // ===== 1. KIỂM TRA EMAIL HOẶC USERNAME ĐÃ TỒN TẠI CHƯA =====
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);

    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      // Có user/email đã đăng ký
      $mess = "Username hoặc Email đã tồn tại";
    } else {
      $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $username, $hashedpassword, $email);

      if ($stmt->execute()) {
        // Đăng ký thành công → chuyển sang trang login
        header("Location: login.php");
        exit;
      } else {
        $mess = "Insert error: " . $stmt->error;
      }
    }
    // ===== 2. INSERT USER MỚI =====
    $stmt->close();
    $conn->close();
  }   ?>
  <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
      <h1>Register Member</h1>

      <form action="" method="post" onsubmit="return validatePassword()">
        <div class="form-group mb-2">
          <label>Username:</label>
          <input type="text" class="form-control" name="username" id="username">
        </div>

        <div class="form-group mb-2">
          <label>Email:</label>
          <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group mb-2">
          <label>Password:</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group mb-2">
          <label>Re Password:</label>
          <input type="password" class="form-control" id="repassword" name="repassword">
        </div>

        <p id="error_message" style="color:red;font-weight:bold;"></p>
        <?php
        if (isset($mess) && !empty($mess)) {
        ?>
          <div>Thông báo lỗi! <?php echo $mess ?></div>
        <?php } ?>

        <div>
          <button type="submit" class="btn btn-primary">Register</button>
          <a href="login.php" class="btn btn-info">Login</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
