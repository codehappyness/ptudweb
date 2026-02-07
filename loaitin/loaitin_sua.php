<?php
	require_once '../kiemtralogin.php';
	include_once '../template/header.php';
	include_once '../template/nav.php';
	require_once '../dbcon.php';

	//kiểm tra trang gọi từ method là get hay post(submit form)
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// lấy dữ liệu từ form
		$maloai = isset($_POST['maloai']) ? intval($_POST['maloai']) : 0;
		$tenloai = isset($_POST['tenloai']) ? trim($_POST['tenloai']) : '';
		$trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : 0;

		// kiểm tra đô dài của tên loại
		if (strlen($tenloai) < 3 || strlen($tenloai) > 100 ) {
			$error = 'Vui lòng nhập tên loại từ 3 đến 100 ký tự';
		} 
		else { //nhập tên loại hợp lệ --> insert vào database
			$stmt = $conn->prepare("UPDATE loaitin SET tenloai = ? , trangthai = ? WHERE maloai = ?");

			if ($stmt) {
				$stmt->bind_param('sii', $tenloai, $trangthai, $maloai);
				if($stmt->execute()){ //thực thi update thành công
					$mess = "Cập nhật thành công";
					header("location: loaitin_quanly.php?mess=".urlencode($mess));
					exit();
				}
				else{ //thực thi update không thành công
					$error = "Lỗi khi cập nhật: ".$stmt->error;
					$stmt->close();
				}
			} 
			else{ //chuẩn bị câu lênh update lỗi
				$error = "Lỗi khi cập nhật: ".$conn->error;
			}
		}
	}

?>
<div class="container" style="padding-left: 50px; padding-right: 50px;">
	<h2>SỬA LOẠI TIN TỨC</h2>

	<form action="" method="post" class="form-horizontal"><div></div>
		<?php
		if(isset($_GET['id']) && is_numeric($_GET['id'])){ //*******************
			$id = intval($_GET['id']);

			//lấy thông tin của loại tin theo id cần sửa
			$stmt = $conn->prepare("SELECT * FROM loaitin WHERE maloai= ? ");
			if ($stmt) { //++++++++++++++++
				$stmt->bind_param('i', $id);
				$stmt->execute();
				$result = $stmt->get_result();
				if($row = $result->fetch_assoc()){ //--------------
		?>
					
					<!-- Hiển thị thông tin ma loại -->
					<div class="form-group">
			      <label for="maloai" class="control-label col-sm-2">Mã loại:</label>
			      <div class="col-sm-10">
			      	<input type="text" class="form-control" name="maloai" id="maloai" value="<?php echo $row['maloai'] ?>" readonly>
			      </div>
			    </div>

					<!-- Hiển thị thông tin tên loại -->
					<div class="form-group">
			      <label for="tenloai" class="control-label col-sm-2">Tên loại:</label>
			      <div class="col-sm-10">
			      	<input type="text" class="form-control" name="tenloai" id="tenloai" placeholder="Nhập tên loại" required value="<?php echo $row['tenloai'] ?>">
			      </div>
			    </div>

			    <!-- Hiển thị thông tin trạng thái -->
			    <div class="form-group">
			      <label for="trangthai" class="control-label col-sm-2">Trạng thái:</label>
			      <div class="col-sm-10">
<label class="radio-inline"><input type="radio" name="trangthai" checked value="1"> Bật</label>

			      	<label class="radio-inline">
			      		<input type="radio" name="trangthai" value="0" <?php if ($row['trangthai'] ==0) echo "checked"; ?>> Tắt</label>
			      	
			      </div>
			    </div>

			    <!-- Hiển thị nút lưu và xem danh sách -->
			    <div class="form-group">
			    	<div class="col-md-offset-4 col-md-2">
			    		<button type="submit" class="btn btn-danger">Lưu</button>
			    	</div>
			      <div class="col-md-2">
			      	<a href="loaitin_quanly.php" class="btn btn-warning">Xem danh sách</a>
			      </div>
			    </div>

    <?php
    
				}
				else{  //-------------
					$mess = "Không tìm thấy loại tin cần sửa";
					header("location: loaitin_quanly.php?mess=".urlencode($mess));
				}
			}
			else{ //+++++++++++++++++
				$mess = "Lỗi chuẩn bị câu lệnh";
				header("location: loaitin_quanly.php?mess=".urlencode($mess));
			}
		}
		else{ //****************
			$mess = "Mã loại cần cập nhật không hợp lệ";
			header("location: loaitin_quanly.php?mess=".urlencode($mess));
		}
	$conn->close();
    ?>

	</form>

	<!-- Hiển thị thông báo khi thêm thành công -->
	<?php 
    if (isset($mess) && $mess!='') {
  ?>
      <div class="alert alert-success">
        <strong>Thông báo: </strong> <?php echo $mess ?>.
      </div>
  <?php
    }
  ?>

  <!-- Hiển thị lỗi -->
  <?php 
    if (isset($error) && $error!='') {
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
