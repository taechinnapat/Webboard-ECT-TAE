<?php 
session_start();
if(isset($_SESSION['id'])){
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard TAE</h1>
    <hr>
    <div style="text-align: center;">
    <?php
    $login=$_POST['login'];
    $pwd=$_POST['password'];
    if($login=="admin" && $pwd=="ad1234"){
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        echo"ยินดีต้อนรับคุณ ADMIN";    
    }
    elseif($login=="member" && $pwd=="mem1234"){
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        echo"ยินดีตอนรับคุณ MEMBER";
    }
    else
        echo "ชื่อบัญชีหรือหรัสผ่านไม่ถูกต้อง";
    ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div> 
    
</body>
</html>