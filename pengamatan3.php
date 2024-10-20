<?php
session_start();
$_SESSION['user'] = 'Niki';
$_SESSION['role'] = 'admin';
$_SESSION['login_time'] = date('Y-m-d');
print_r($_SESSION);
echo"</br>";
echo $_SESSION['user'];
?>