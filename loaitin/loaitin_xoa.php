<?php
	require_once '../kiemtralogin.php';
	require_once '../dbcon.php';
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		if (isset($_GET['id']) && is_numeric($_GET['id'])) { //nhận được id cần xóa
			$maloai = intval($_GET['id']);

			//1. Kiểm tra xem có tin tức tham chiếu đến loại tin xóa không
			$check_stmt = $conn->prepare("SELECT count(*) FROM 	tintuc WHERE id_loaitin = ?");

			if ($check_stmt) { //Chuẩn bị câu lệnh đếm dữ liệu hợp
				$check_stmt->bind_param('i', $maloai);
				$check_stmt->execute();
				$check_stmt->bind_result($count);
				$check_stmt->fetch();
				$check_stmt->close();

				if ($count > 0) { //có tin tức tham chiếu --> không xóa
					$mess = "Không thể xóa. Loại tin này đang được tin tức tham chiếu đến";
				} else{ //Không có tin tức tham chiếu --> xóa loại tin
					$stmt = $conn->prepare("DELETE FROM loaitin WHERE maloai = ?");
					if ($stmt) { //Chuẩn bị câu lệnh xóa hợp lệ
						$stmt->bind_param('i', $maloai);
						if ($stmt->execute()) { //thực thi lệnh xóa thành công
							$mess = "Xóa thành công";
						} 
						else{ //lệnh xóa thực thi không thành công
							$mess = "Lỗi khi xóa: ".$stmt->error;
						}
						$stmt->close();
					} 
					else{ //Chuẩn bị câu lệnh xóa không hợp lệ
						$mess = "Lỗi chuẩn bị câu truy vấn: ".$conn->error;
					}
				}
			}
			else{
				$mess = "Lỗi chuẩn bị câu truy vấn: ".$conn->error;
			}

		}
		else{ //không nhận được id cần xóa
			$mess = "Mã loại tin (ID) cần xóa không hợp lệ";
		}

		$conn->close();
		header("location: loaitin_quanly.php?mess=".urlencode($mess));
		exit();
	}
?>
