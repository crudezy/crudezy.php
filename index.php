<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Membuat Form Login Tanpa Database</title>
</head>
<body>

    <h1>Selamat Datang di <a href="">Form Login</a></h1>
    <h2>Silahkan Login</h2>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<b>Maaf, username dan password salah! </b>";
                
        }else if($_GET['pesan'] == "logout"){
            echo "<b>Terima kasih, Anda telah logout! </b>";

        }else if($_GET['pesan'] == "login_dulu"){
            echo "<b>Silahkan login untuk masuk 
                dashboard! </b>";

        }
    }
    ?>

    <form action="periksa_login.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" required="required
        ">

        <br><br>

        <label>Password</label>
        <input type="password" name="password" required="
        required">

        <br><br>

        <input type="submit" name="submit" value="LOGIN">
    </form>

</body>
</html>