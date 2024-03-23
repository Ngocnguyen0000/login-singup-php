<?php
// Kết nối đến cơ sở dữ liệu
$hostName = "localhost:3306";
$dbUser = "login";
$dbPassword = "123";
$dbName = "dangnhap";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Truy vấn cơ sở dữ liệu để lấy dữ liệu
$sql = "SELECT * FROM user"; 
$result = $conn->query($sql);

// Hiển thị dữ liệu
if ($result->num_rows > 0) {
    // Duyệt qua từng dòng kết quả và hiển thị
    while($row = $result->fetch_assoc()) {
        echo "Xin chào bạn: " . $row["name"]. " - Số điện thoại của bạn: " . $row["phone"]. " - Số tuổi của bạn: " . $row["age"]. "<br>";
    }
} else {
    echo "Không có dữ liệu.";
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <br>
    <div class="container">
        <a href="login.php">Đăng nhập</a> hoặc  
        <a href="registration.php">Đăng ký</a>
    </div>
            
</body>
</html>