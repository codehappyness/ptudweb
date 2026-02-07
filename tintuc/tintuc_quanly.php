<?php

require_once '../kiemtralogin.php';
/** @var mysqli $conn */
require_once '../dbcon.php';
include '../template/header.php';
include '../template/nav.php';

?>
<div class="container">
  <h2>Quản lý tin tức</h2>

  <a href="../tintuc/tintuc_them.php" class="btn btn-danger mb-10">Thêm mới</a>
  <?php
  if (isset($_GET['mess']) && $_GET['mess'] != "") {
    $mess = $_GET['mess'];
  ?>
    <div class="alert alert-success">
      <strong>Thông báo: </strong> <?php echo $mess ?>.
    </div>
  <?php
  }
  ?>
  <?php
  if (isset($_GET['err']) && $_GET['err'] != "") {
    $mess = $_GET['err'];
  ?>
    <div class="alert alert-danger">
      <strong>Thông báo lỗi: </strong> <?php echo $mess ?>.
    </div>
  <?php
  }
  ?>
  <table class="table table-stripped">
    <tr>
      <th>Tiêu đề</th>
      <th>Tóm tắt</th>
      <th>Trạng thái</th>
      <th>Tác giả</th>
      <th>Hành động</th>
    </tr>
    <?php
    $sql = 'select * from tintuc';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $row['tieude'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php echo $row['tacgia'] ?></td>
        <td><?php echo $row['trangthai'] == 1 ? "Bật" : "Tắt" ?></td>
        <td>
          <a href="tintuc_sua.php?id=<?= $row['id'] ?>" class="btn btn-xs btn-primary">Sửa</a>
          <a href="tintuc_xoa.php?id=<?= $row['id'] ?>"
            class="btn btn-xs btn-danger"
            onclick="return confirm('Bạn có chắc muốn xóa không?')">
            Xóa
          </a>
        </td>
      </tr>
    <?php

    }
    ?>
  </table>
</div>
<?php

include '../template/footer.php';
?>
