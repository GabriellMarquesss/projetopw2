
<?php
session_start();
if (!isset($_SESSION['login-usuario'])){
    header('Location: login.php');
}else{
    if (isset($_GET['logout'])){
        unset($_SESSION['login-usuario']);
        header('Location: login.php');
        //session_destroy();
    }
}
?>