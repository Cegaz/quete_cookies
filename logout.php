<?php
session_start();

if(isset($_SESSION)) {
    session_destroy();
    setcookie('cart');
}
header('Location:login.php');