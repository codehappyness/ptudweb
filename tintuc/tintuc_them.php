<?php
require_once '../kiemtralogin.php';
include_once '../template/header.php';
include_once '../template/nav.php';
/** @var mysqli $conn */
require_once '../dbcon.php';

//kiểm tra trang gọi từ method là get hay post(submit form)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // lấy dữ liệu từ form
  $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
  $tieude = isset($_POST['tieude']) ? trim($_POST['tieude']) : '';
  $tomtat = isset($_POST['tomtat']) ? trim($_POST['tomtat']) : '';
  $noidung = isset($_POST['noidung']) ? trim($_POST['noidung']) : '';
  $hinhanh = isset($_POST['hinhanh']) ? trim($_POST['hinhanh']) : '';
  $ngaydang = isset($_POST['ngaydang']) ? trim($_POST['ngaydang']) : '';
  $tacgia = isset($_POST['tacgia']) ? trim($_POST['tacgia']) : '';
  $id_loaitin = isset($_POST['id_loaitin']) ? trim($_POST['id_loaitin']) : '';
  $luotxem = isset($_POST['luotxem']) ? $_POST['luotxem'] : 0;
  $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : 0;

  // kiểm tra đô dài của tên loại
  if (strlen($tieude) < 3 || strlen($tieude) > 255) {
    $error = 'Vui lòng nhập tiêu đề từ 3 đến 100 ký tự';
  } else { //nhập tên loại hợp lệ --> insert vào database
    $stmt = $conn->prepare("INSERT INTO tintuc (tieude, tomtat, noidung, hinhanh, ngaydang, tacgia, id_loaitin, luotxem, trangthai)
     VALUES ( ?, ? , ? , ?, ?, ?, ?, ?, ?)");

    //"ssssssiiii"
    if ($stmt) {
      //      $stmt->bind_param('ssssssiiii', $tenloai, $trangthai, $maloai);
      $stmt->bind_param(
        "ssssssiii",
        $tieude,
        $tomtat,
        $noidung,
        $hinhanh,
        $ngaydang,
        $tacgia,
        $id_loaitin,
        $luotxem,
        $trangthai,
      );
      if ($stmt->execute()) { //thực thi update thành công
        $mess = "Thêm tin tức thành công";
        header("location: tintuc_quanly.php?mess=" . urlencode($mess));
        exit();
      } else { //thực thi update không thành công
        $error = "Lỗi khi cập nhật: " . $stmt->error;
        $stmt->close();
      }
    } else { //chuẩn bị câu lênh update lỗi
      $error = "Lỗi khi cập nhật: " . $conn->error;
    }
  }
}

?>
<div class="container" style="">
  <h2>THÊM TIN TỨC</h2>

  <form action="" method="post" class="form-horizontal">
    <div></div>
    <?php
    $sqlLoai = "SELECT maloai, tenloai FROM loaitin";
    $resultLoai = $conn->query($sqlLoai);
    ?>
    <!-- Tiêu đề -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Tiêu đề:</label>
      <div class="col-sm-10">
        <input type="text" name="tieude" class="form-control" value="" required>
      </div>
    </div>

    <!-- Tóm tắt -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Tóm tắt:</label>
      <div class="col-sm-10">
        <textarea name="tomtat" class="form-control" rows="3"></textarea>
      </div>
    </div>

    <!-- Nội dung -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Nội dung:</label>
      <div class="col-sm-10">
        <textarea name="noidung" class="form-control" rows="6"></textarea>
      </div>
    </div>

    <!-- Hình ảnh -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Hình ảnh:</label>
      <div class="col-sm-10">
        <input type="text" name="hinhanh" class="form-control" value="" required>
      </div>
    </div>

    <!-- Ngày đăng -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Ngày đăng:</label>
      <div class="col-sm-10">

        <input type="datetime-local"
          name="ngaydang"
          class="form-control"
          value="<?= date('Y-m-d\TH:i') ?>">
      </div>
    </div>

    <!-- Tác giả -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Tác giả:</label>
      <div class="col-sm-10">
        <input type="text" name="tacgia" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label for="trangthai" class="control-label col-sm-2">Trạng thái:</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" name="trangthai" checked value="1"> Bật</label>

        <label class="radio-inline">
          <input type="radio" name="trangthai" value="0"> Tắt</label>

      </div>
    </div>
    <!-- Loại tin -->
    <div class="form-group">
      <label class="col-sm-2 control-label">Loại tin:</label>
      <div class="col-sm-10">
        <select name="id_loaitin" class="form-control">
          <?php while ($loai = $resultLoai->fetch_assoc()) { ?>
            <option value="<?= $loai['maloai'] ?>"
              <?= $loai['tenloai'] ?>
              </option>
            <?php } ?>

        </select>
      </div>
    </div>
    <!-- Hiển thị nút lưu và xem danh sách -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="tintuc_quanly.php" class="btn btn-default">Xem danh sách</a>
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
