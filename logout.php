<?php
 session_start();
 if(assert($_SESSION['login_user'])) {
    unset($_SESSION['login_user']);
 }
 header("location:index.php");
?>