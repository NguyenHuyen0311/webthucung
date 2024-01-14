<?php 
    require_once "connect.php";

    if (isset($_POST['btnContact']) && ($_POST['btnContact'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sđt = $_POST['sđt'];
        $note = $_POST['note'];

        $insert = "INSERT INTO `contact`(`username`, `email`, `sđt`, `note`) VALUES ('$username', '$email', '$sđt', '$note')";
        mysqli_query($conn, $insert);

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-md-12">
        <h4>Bạn đã gửi thành công! Chúng tôi sẽ sớm liên hệ lại với bạn!</h4>
    </div>
    <div class="col-md-12">
        <form action="index.php" method="post">
            <button name="btnBack" class="btn btn-primary" type="submit">Trở về Trang Chủ</button>
        </form>
    </div>
</body>