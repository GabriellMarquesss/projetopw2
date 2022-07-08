<?php
session_status();
if (!isset($_SESSION['login-usuario'])){
    header('Location: login.php');
}else{
    if (isset($_GET['logout'])){
        unset($_SESSION['login-usuario']);
        //session_destroy();
    }
}
?>
