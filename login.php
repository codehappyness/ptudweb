<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/bootstrap/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <title>Thực hành phát triển ứng dụng web</title>

</head>

<body>
  <?php
  session_start();
  /** @var mysqli $conn */
  require_once 'dbcon.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Nếu biến $_POST['username'] tồn tại thì lấy giá trị đó về, ngược lại dùng chuỗi rỗng
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
      $mess = 'Vui lòng nhập đủ username và mật khẩu';
    } else { //đối chiếu với database
      //chuẩn bị câu truy vấn kiểm tra tài khoản
      $stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?');

      //kiểm tra câu lệnh chuẩn bị có hợp lệ không
      if (!$stmt) { //không hợp lệ 
        die("Lỗi câu truy vấn" . $conn->error);
      }

      $stmt->bind_param('s', $username);
      $stmt->execute();
      $stmt->store_result(); //nếu có dữ liệu --> thông tin đăng nhập hợp lệ

      if ($stmt->num_rows === 1) { //tìm thấy username có trong database
        //bind_result: không lấy giá trị ngay, chỉ gắn tên biến với các cột dl lấy được
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        //so sánh mật khẩu nhập vào (chưa MH) với mật khẩu của user lấy từ database(đã MH)
        if ($hashed_password !== null && password_verify($password, $hashed_password)) {
          // nếu đăng nhập thành công thì lưu thông tin đăng nhập vào session
          $_SESSION['user_id'] = $user_id;
          $_SESSION['user_name'] = $username;
          header('Location: index.php');
          exit();
        } else { //xác nhận mật khẩu không đúng
          $mess = "Mật khẩu chưa đúng";
        }
      } else { //không tìm thấy username đăng nhập
        $mess = "Tên người dùng này không tồn tại";
      }

      $stmt->close();
      $conn->close();
    }
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <form action="" method="post">
          <div class="text-center">
            <h3>Login form</h3>
            <img width="100" height="100" src="assets/images/avatar.jpg" alt="Avartar" class="avartar">
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Nhập Username" required>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Nhập password" required>
          </div>

          <button type="submit" class="btn btn-danger">Login</button>
          <input type="reset" value="Cancel" class="btn btn-primary">
          <a href="register.php">Sign up</a>(If you do not alrealy have an account)
        </form>
        <br>
        <?php
        if (isset($mess) && $mess != '') {
        ?>
          <div class="alert alert-danger">
            <strong>Thông báo lỗi! </strong> <?php echo $mess ?>.
          </div>
        <?php
        }
        ?>
      </div>
    </div>

  </div>
</body>

</html>
