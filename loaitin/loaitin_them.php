<?php
require_once '../kiemtralogin.php';
include_once '../template/header.php';
include_once '../template/nav.php';
require_once '../dbcon.php';

//kiểm tra trang gọi từ method là get hay post(submit form)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // lấy dữ liệu từ form
  $tenloai = isset($_POST['tenloai']) ? trim($_POST['tenloai']) : '';
  $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : 0;

  // kiểm tra đô dài của tên loại
  if (strlen($tenloai) < 3 || strlen($tenloai) > 100) {
    $error = 'Vui lòng nhập tên loại từ 3 đến 100 ký tự';
  } else { //nhập tên loại hợp lệ --> insert vào database
    $stmt = $conn->prepare("INSERT INTO loaitin (tenloai, trangthai) VALUES (? , ?)");
    if ($stmt) { //câu lện chuẩn bị hợp lệ
      $stmt->bind_param('si', $tenloai, $trangthai);
      if ($stmt->execute()) { //thực thi câu lệnh thành công
        $mess = "Thêm mới thành công";
      } else { //thực thi câu lệnh không thành công
        $error = "Lỗi thêm mới: " . $stmt->error;
      }
    } else { //câu lệnh insert không hợp lệ
      $error = "Lỗi chuẩn bị câu insert SQL: " . $conn->error;
    }
    $stmt->close();
  }
}
$conn->close();
?>

<div class="container" style="padding-left: 50px; padding-right: 50px;">
  <h2>THÊM LOẠI TIN TỨC</h2>

  <form action="" method="post" class="form-horizontal">
    <div></div>
    <!-- Hiển thị thông tin tên loại -->
    <div class="form-group">
      <label for="tenloai" class="control-label col-sm-2">Tên loại:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="tenloai" id="tenloai" placeholder="Nhập tên loại" required>
      </div>
    </div>

    <!-- Hiển thị thông tin trạng thái -->
    <div class="form-group">
      <label for="trangthai" class="control-label col-sm-2">Trạng thái:</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" name="trangthai" checked value="1"> Bật</label>

        <label class="radio-inline"><input type="radio" name="trangthai" value="0"> Tắt</label>

      </div>
    </div>

    <!-- Hiển thị nút lưu và xem danh sách -->
    <div class="form-group">
      <div class="col-md-offset-3 col-md-3">
        <button type="submit" class="btn btn-danger">Lưu</button>
      </div>
      <div class="col-md-3">
        <a href="loaitin_quanly.php" class="btn btn-info">Xem danh sách</a>
      </div>
    </div>

  </form>

  <!-- Hiển thị thông báo khi thêm thành công -->
  <?php
  if (isset($mess) && $mess != '') {
  ?>
    <div class="alert alert-success">
      <strong>Thông báo: </strong> <?php echo $mess ?>.
    </div>
  <?php
  }
  ?>

  <!-- Hiển thị lỗi -->
  <?php
  if (isset($error) && $error != '') {
  ?>
    <div class="alert alert-danger">
      <strong>Thông báo lỗi! </strong> <?php echo $mess ?>.
    </div>
  <?php
  }
  ?>
</div>
<?php
include_once '../template/footer.php';
?>
