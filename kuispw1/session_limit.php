<?php
    $timeout = 300; //in seconds

    if (isset($_SESSION['session_time'])) {
        $elapsed_time = time() - $_SESSION['session_time'];
        if ($elapsed_time >= $timeout) {
            session_destroy();
            header("location:login.php");
        }
    }
?>