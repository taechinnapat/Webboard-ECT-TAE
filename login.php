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
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="m-3">Webboard KakKak</h1>
    <?php include "nav.php" ?>

    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 col-10">
            <?php 
                if(isset($_SESSION['error'])){
                echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                unset($_SESSION['error']);
                }
            ?>
            <div class="card bg-light text-dark">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="post">
                        <div class="form-group">
                            <label for="login" class="form-label">Login:</label>
                            <input type="text" name="login" id="login" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label for="pwd" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="input-group-text" onclick="password_show_hide()">
                                    <i class="bi bi-eye-fill" id="show_eye"></i>
                                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                </span>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            
                            <input class="btn btn-success btn-sm me-2" type="submit" value="Login">
                            <input class="btn btn-danger btn-sm" type="reset" value="Reset">
                            
                        </div>
                        
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
    </div>
    <br>
    <div style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php" class="btn btn-primary btn-sm">กรุณาสมัครสมาชิก</a> </div>
</div>
<script>
    function password_show_hide(){
        let x=document.getElementById("password");
        let show_eye=document.getElementById("show_eye");
        let hide_eye=document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if(x.type==="password"){
            x.type="text";
            show_eye.style.display="none";
            hide_eye.style.display="block";
        }
        else{
            x.type="password";
            show_eye.style.display="block";
            hide_eye.style.display="none";  
        }
 
    }    
</script>
</body>
</html>