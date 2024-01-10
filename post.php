<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard TAE</h1>
    <hr>
    <div style="text-align: center;"> ต้องการแสดงกระทู้หมายเลข 
    <?php echo "$_GET[id] <br>";
    $n=$_GET['id'];
    if($n % 2==0){
    echo"เป็นกระทู้หมายเลขคู่";
    }
    else
    echo"เป็นกระทู้หมายเลขคี่";
    ?>
    </div>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="message"row="10" cols="70"></textarea> </td></tr>
        <tr><td style="text-align: center;"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <div style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>