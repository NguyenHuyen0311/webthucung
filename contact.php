<?php 
    require_once "connect.php";

    if (isset($_POST['btnContact']) && ($_POST['btnContact'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $sđt = $_POST['sđt'];
        $note = $_POST['note'];

        $insert = "INSERT INTO `contact`(`username`, `email`, `sđt`, `note`) VALUES ('$username', '$email', '$sđt', '$note')";
        mysqli_query($conn, $insert);
        header('location: index.php');
    }
?>