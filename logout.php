<?php
    header("content-type: text/javascript");
    session_start();
    sleep(1);
    unset($_SESSION['id']);
    echo "location = 'index.php';";
?>