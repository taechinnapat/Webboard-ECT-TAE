<?php
session_start();
$top=$_POST['topic'];
$content=$_POST['content'];
$cate=$_POST['category'];
$user_id=$_SESSION['user_id'];

$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="INSERT INTO post (title, content,post_date, cat_id, user_id)
VALUES ('$top','$content',NOW(),'$cate','$user_id')";
$conn->exec($sql);
$conn=null;
header("location:index.php");
die();
?>