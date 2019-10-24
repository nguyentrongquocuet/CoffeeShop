<?php
    session_start();
    if(isset($_SESSION['account'])){
        unset($_SESSION['account']);
        unset($_SESSION['cart']);
        header('Location: login.php');
    }
header('Location: login.php');
?>