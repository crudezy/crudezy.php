<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, 
    initial-scale=1"> 
    <title>Halaman admin -pemrograman web</title> 
    <?php 
    // mengaktifkan session 
    session_start(); 
    // memeriksa apakah session "status" berisi string "login" 
    if($_SESSION['status'] != "login"){
        header("location:../index.php?pesan=login_dulu"); 
    } 
    ?> 
</head> 
<body> 
    <h2>Ini Adalah halaman dashboard admin</h2> 
    <!-- menu admin --> 
    <a href="index.php">DASHBOARD</a> 
    <!-- link logout --> 
    <a href="logout.php">LOGOUT</a> 
    <p>Halo, Selamat datang <b><?php echo $_SESSION['username'] ?></
    b>!</p> 
</body> 
</html>