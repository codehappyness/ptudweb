<?php

require_once '../kiemtralogin.php';
require_once '../dbcon.php';
include '../template/header.php';
include '../template/nav.php';

?>
<div class="container">
  <h2>Quan ly loai tin tuc</h2>
  <a href="" class="btn btn-danger">Thêm mới</a>
  <table class="table table-stripped">
    <tr>
      <th>Ma loai</th>
      <th>Ten loai</th>
      <th>Trang thai</th>
      <th>Sua</th>
      <th>Xoa</th>
    </tr>
    <?php
    $sql = 'select * from loaitin';
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $row['maloai'] ?></td>
        <td><?php echo $row['tenloai'] ?></td>
        <td><?php echo $row['trangthai'] == 1 ? "Bat" : "Tat" ?></td>
        <td><a href="loaitin_sua.php?id=<?php echo $row['maloai'] ?>">Sua</a></th>
        <td><a href="loaitin_xoa.php?id=<?php echo $row['maloai'] ?>" onclick="return confirm('Ban co chac chan xoa khong');">Xoa</a></a>
      </tr>
    <?php

    }
    ?>
  </table>
</div>
<?php

include '../template/footer.php';
?>
