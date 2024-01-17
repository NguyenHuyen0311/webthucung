<?php
    require_once "connect.php";

    session_start();

    if (isset($_SESSION['mySession'])) {
        header("location:index.php");
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login = "SELECT * FROM members WHERE username = '$username' AND password = '$password' ";
    
        $result = mysqli_query($conn, $login);
    
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['mySession'] = $username;
            header("location:index.php");
        }
        else {
            echo "Tài khoản hoặc mật khẩu của bạn chưa đúng";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="login.php" method="post">
                    <div class="col-md-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="col-md-6" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
                        <button type="submit" class="btn btn-green" name="signup"><a href="signup.php">Đăng ký</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
