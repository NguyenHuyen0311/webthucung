<?php 
    require_once "connect.php";

    if(isset($_POST['btn'])) {
        $id_member = "";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = 2;

        $signupsql = "INSERT INTO members (id_member, username, password, level)
        VALUES ('$id_member', '$username', '$password', '$level')";

        mysqli_query($conn, $signupsql);

        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="signup.php" method="post">
                    <div class="col-md-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="col-md-6" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-secondary" name="btn">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>