<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}elseif($username == "kasir" && $password == "kasir123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/methodeGet.php");
}elseif($username == "supervisor" && $password == "supervisor123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/supervisor.php");
}elseif($username == "manager" && $password == "manager123"){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/manager.php");    
    
}else{
    header("location:index.php?pesan=gagal");
}
?>