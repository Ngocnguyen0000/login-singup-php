<?php
session_start();

// Kết nối tới cơ sở dữ liệu
$hostName = "localhost:3306";
$dbUser = "login";
$dbPassword = "123";
$dbName = "dangnhap";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$email = $_POST['email'];
$password = $_POST['password'];

// Xử lý đăng nhập
$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Đăng nhập thành công
    $_SESSION['email'] = $email;
    header("Location: login-success.php");
} else {
    // Đăng nhập thất bại
    echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
}
$conn->close();
?>
