<?php
// Kết nối tới cơ sở dữ liệu
$hostName = "localhost:3306";
$dbUser = "login";
$dbPassword = "123";
$dbName = "dangnhap";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

// Kiểm tra xem người dùng đã tồn tại chưa
$sql_check = "SELECT * FROM user WHERE email='$email'";
$result_check = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    // Người dùng đã tồn tại
    echo "Email đã tồn tại. Vui lòng chọn tên email khác.";
} else {
    // Thêm người dùng mới vào cơ sở dữ liệu
    $sql_insert = "INSERT INTO `user`(`name`, `email`, `phone`, `age`, `password`, `repassword`) VALUES ('$name', '$email', '$phone', '$age', '$password', '$repassword')";
    if (mysqli_query($conn, $sql_insert)) {
        // echo "Đăng ký thành công. Vui lòng đăng nhập.";
        header("Location: login-success.php");
    } else {
        echo "Đã xảy ra lỗi khi đăng ký: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
