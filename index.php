<?php
session_start();

if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];

    header('location:home.html');
    exit();
} else {
    header('location:login.php');
    exit();
}