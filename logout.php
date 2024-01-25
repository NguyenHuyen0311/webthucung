<?php
    session_start();

    if (isset($_SESSION['mySession'])) {
        unset($_SESSION['mySession']);
    }
    
    header("location:login.php");
?>

<?php
    // logout.php

    // Start the session
    // session_start();

    // // Destroy all session data
    // session_destroy();

    // // Redirect to the login page or any other appropriate page
    // header("Location: login.php");
?>
