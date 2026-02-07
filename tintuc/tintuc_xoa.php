<?php
require_once '../kiemtralogin.php';
/** @var mysqli $conn */
require_once '../dbcon.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id']) && is_numeric($_GET['id'])) { //nhận được id cần xóa
    $maloai = intval($_GET['id']);
    //1. Kiểm tra xem có tin tức tham chiếu đến loại tin xóa không

    $stmt = $conn->prepare("DELETE FROM tintuc WHERE id = ?");
    if ($stmt) { //Chuẩn bị câu lệnh xóa hợp lệ
      $stmt->bind_param('i', $maloai);
      if ($stmt->execute()) { //thực thi lệnh xóa thành công
        $mess = "Xóa thành công";
      } else { //lệnh xóa thực thi không thành công
        $mess = "Lỗi khi xóa: " . $stmt->error;
      }
      $stmt->close();
    } else { //Chuẩn bị câu lệnh xóa không hợp lệ
      $mess = "Lỗi chuẩn bị câu truy vấn: " . $conn->error;
    }
  } else { //không nhận được id cần xóa
    $mess = "Mã tin tức (ID) cần xóa không hợp lệ";
  }

  $conn->close();
  header("location: tintuc_quanly.php?mess=" . urlencode($mess));
  exit();
}
