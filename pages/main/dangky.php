<?php
include ("admincp/config/config.php"); // Đảm bảo rằng bạn đã kết nối cơ sở dữ liệu
if (isset($_POST['dangky'])) {
	$tenkhachhang = $_POST['hovaten'];
	$email = $_POST['email'];
	$dienthoai = $_POST['dienthoai'];
	$matkhau = md5($_POST['matkhau']);
	$diachi = $_POST['diachi'];

	// Kiểm tra email đã tồn tại trong cơ sở dữ liệu chưa
	$check_email_query = "SELECT * FROM tbl_dangky WHERE email = '$email'";
	$result = mysqli_query($mysqli, $check_email_query);

	if (mysqli_num_rows($result) > 0) {
		echo '<p style="color:red">Email này đã được sử dụng. Vui lòng chọn email khác.</p>';
	} else {
		// Chèn dữ liệu đăng ký mới vào cơ sở dữ liệu
		$sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUES('" . $tenkhachhang . "','" . $email . "','" . $diachi . "','" . $matkhau . "','" . $dienthoai . "')");

		if ($sql_dangky) {
			if ($tenkhachhang != "" && $email != "" && $diachi != "" && $dienthoai != "" && $matkhau != "") {
				$_SESSION['dangky'] = $tenkhachhang;
				$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
				header('Location: index.php?quanly=home');
				exit; // Dừng script sau khi chuyển hướng
			} else {
				echo '<p style="color:red">Thông tin đăng ký không đầy đủ</p>';
			}
		} else {
			echo '<p style="color:red">Có lỗi xảy ra trong quá trình đăng ký. Vui lòng thử lại.</p>';
		}
	}
}
?>

<div class="main5" style="margin-top: 20px;">


	<div class="form_login">
		<div class="form_login-content">
			<h1> Đăng Kí </h1>
			<form action="" method="POST">
				<div class="login1">
					<input type="text" name="hovaten" placeholder="Họ và Tên ">

				</div>
				<div class="login1">
					<input type="email" name="email" placeholder="Email của bạn ">
				</div>
				<div class="login1">
					<input type="password" name="matkhau" placeholder="Nhập Mật Khẩu">
				</div>
				<div class="login1">
					<input type="tel" name="dienthoai" pattern="[0-9]{10}"
						placeholder="Nhập Điện thoại ( Yêu cầu dạng số)">
				</div>
				<div class="login1">
					<input type="text" name="diachi" placeholder="Nhập địa chỉ">
				</div>
				<input type="submit" name="dangky" value="Đăng ký" class="login-btn">
				<button class="login-btn link-login"> <a href="index.php?quanly=dangnhap" class="check-btn">Đăng nhập
						nếu có tài khoản</a></button>

			</form>
		</div>
	</div>
</div>