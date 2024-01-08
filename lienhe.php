<?php
    require_once "connect.php";
    
    echo "<h1> Chúng tôi sẽ sớm liên hệ lại với bạn! </h1>";
    if (isset($_POST['lienhe'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sđt = $_POST['sđt'];
        $note = $_POST['note'];
        
        // Query để chèn dữ liệu vào database
        $insert = "INSERT INTO `contact`(`username`, `email`,`sđt`,`note`) 
        VALUES ('$username', '$email','$sđt','$note')";
        mysqli_query($conn, $insert);
    }
?>
