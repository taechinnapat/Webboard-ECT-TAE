<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewPost</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard TAE</h1>
    <hr>
    <?php
        echo"ผู้ใช้: $_SESSION[username]";
        echo"<table>
        <tr><td>หมวดหมู่:</td><td>
        <select>
            <option value= general>เรื่องทั่วไป</option>
            <option value= study>เรื่องเรียน</option>
        </select></td>
        <tr><td>หัวข้อ:</td><td><input type=text></td></tr>
        <tr><td>เนื้อหา:</td><td><textarea name=message cols= 30 rows= 2></textarea></td></tr>
        <tr><td></td><td><input type= submit value= บันทึกข้อความ></td></tr>
        </table>";
    ?>