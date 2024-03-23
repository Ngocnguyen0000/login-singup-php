<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="process-singup.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id='name' placeholder="Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id = 'email' placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name="phone" id = 'phone' placeholder="Phone:">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" id = 'age' placeholder="Age:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id='password' placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repassword" id='repassword' placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Đăng ký" name="submit">
            </div>
        </form>
        <div>
        <br>
        <div><p>Đã có tài khoản <a href="login.php">Đăng nhập tại đây</a></p></div>
      </div>
    </div>
</body>
</html>