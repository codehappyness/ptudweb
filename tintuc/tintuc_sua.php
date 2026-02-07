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
  if (strlen($tieude) < 3 || strlen($tieude) > 100) {
    $error = 'Vui lòng nhập tên loại từ 3 đến 100 ký tự';
  } else { //nhập tên loại hợp lệ --> insert vào database
    $stmt = $conn->prepare("UPDATE tintuc 
      SET tieude = ? , tomtat = ?, noidung = ?, hinhanh = ?, ngaydang = ?, 
      tacgia = ?, id_loaitin = ?, luotxem = ?, trangthai = ? WHERE id = ?");

    //"ssssssiiii"
    if ($stmt) {
      //      $stmt->bind_param('ssssssiiii', $tenloai, $trangthai, $maloai);
      $stmt->bind_param(
        "ssssssiiii",
        $tieude,
        $tomtat,
        $noidung,
        $hinhanh,
        $ngaydang,
        $tacgia,
        $id_loaitin,
        $luotxem,
        $trangthai,
        $id
      );
      if ($stmt->execute()) { //thực thi update thành công
        $mess = "Cập nhật thành công";
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
  <h2>SỬA TIN TỨC</h2>

  <form action="" method="post" class="form-horizontal">
    <div></div>
    <?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])) { //*******************
      // Lấy danh sách loại tin
      $sqlLoai = "SELECT maloai, tenloai FROM loaitin";
      $resultLoai = $conn->query($sqlLoai);
      $id = intval($_GET['id']);

      //lấy thông tin của loại tin theo id cần sửa
      $stmt = $conn->prepare("SELECT * FROM tintuc WHERE id= ? ");
      if ($stmt) { //++++++++++++++++
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) { //--------------
    ?>

          <!-- ID -->
          <div class="form-group">
            <label class="col-sm-2 control-label">ID:</label>
            <div class="col-sm-10">
              <input type="text" name="id" class="form-control" value="<?php echo $row['id'] ?>" readonly>
            </div>
          </div>
          <!-- Tiêu đề -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Tiêu đề:</label>
            <div class="col-sm-10">
              <input type="text" name="tieude" class="form-control" value="<?php echo $row['tieude'] ?>" required>
            </div>
          </div>

          <!-- Tóm tắt -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Tóm tắt:</label>
            <div class="col-sm-10">
              <textarea name="tomtat" class="form-control" rows="3"><?php echo $row['tomtat'] ?></textarea>
            </div>
          </div>

          <!-- Nội dung -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Nội dung:</label>
            <div class="col-sm-10">
              <textarea name="noidung" class="form-control" rows="6"> <?php echo $row['noidung'] ?></textarea>
            </div>
          </div>

          <!-- Hình ảnh -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Hình ảnh:</label>
            <div class="col-sm-10">
              <input type="text" name="hinhanh" class="form-control" value="<?php echo $row['hinhanh'] ?>" required>
            </div>
          </div>

          <!-- Ngày đăng -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Ngày đăng:</label>
            <div class="col-sm-10">

              <input type="datetime-local"
                name="ngaydang"
                class="form-control"
                value="<?= date('Y-m-d\TH:i', strtotime($row['ngaydang'])) ?>">
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
                <input type="radio" name="trangthai" value="0" <?php if ($row['trangthai'] == 0) echo "checked"; ?>> Tắt</label>

            </div>
          </div>
          <!-- Loại tin -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Loại tin:</label>
            <div class="col-sm-10">
              <select name="id_loaitin" class="form-control">

                <?php while ($loai = $resultLoai->fetch_assoc()) { ?>

                  <option value="<?= $loai['maloai'] ?>"
                    <?= ($loai['maloai'] == $row['id_loaitin']) ? 'selected' : '' ?>>

                    <?= $loai['tenloai'] ?>

                  </option>

                <?php } ?>

              </select>
            </div>
          </div>
          <!-- Lượt xem -->
          <div class="form-group">
            <label class="col-sm-2 control-label">Lượt xem:</label>
            <div class="col-sm-10">
              <input type="number" name="luotxem" class="form-control" value="0">
            </div>
          </div>

          <!-- Buttons -->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a href="index.php" class="btn btn-default">Quay lại</a>
            </div>
          </div>

          <!-- Hiển thị nút lưu và xem danh sách -->
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Lưu</button>
              <a href="tintuc_quanly.php" class="btn btn-default">Xem danh sách</a>
            </div>
          </div>

    <?php

        } else {  //-------------
          $mess = "Không tìm thấy tin tức cần sửa";
          header("location: tintuc_quanly.php?mess=" . urlencode($mess));
        }
      } else { //+++++++++++++++++
        $mess = "Lỗi chuẩn bị câu lệnh";
        header("location: tintuc_quanly.php?mess=" . urlencode($mess));
      }
    } else { //****************
      $mess = "Mã tin tức cần cập nhật không hợp lệ";
      header("location: tintuc_quanly.php?mess=" . urlencode($mess));
    }
    $conn->close();
    ?>

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
