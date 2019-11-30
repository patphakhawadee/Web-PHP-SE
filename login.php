<!doctype html>
<?php include "TopSession.php"; ?>
<html>
    <?php include "headhtml.php"; ?>
    <body class="body1">
            <?php 
//        include "header.php"; 
                    if(!empty($_GET["check"]))
                    {
                        $check = $_GET["check"];
                        if($check == 'false')
                            echo "<script type='text/javascript'>alert('Invalid Username or Password!');</script>";
                    }
                    if(isset($_SESSION["userID"]))
                    {
                        header("location: index.php");
                    }
//                    else if(isset($_SESSION["username"])&&isset($_SESSION["empid"]))
//                        header("location: manage.php");
            ?>
        <div class="content_box">
            <div class="login-page">
                <div class="form">
                    <form class="login-form" action='checklogin.php' method="post">
                        <i class='fa fa-user' style="font:normal normal normal 94px/1 FontAwesome;font-size:-webkit-xxx-large"></i><br><br>
                      <input type="text" name="id" placeholder="ชื่อผู้ใช้"/ required style="color:black">
                      <input type="password" name="password" placeholder="รหัสผ่าน"/ required style="color:black">
                      <button type="submit" style="font-size: 1em;">ลงชื่อเข้าใช้</button><br><br>
                     
<!--                     <p class="message">ไม่มีบัญชีผู้ใช้ ?  <a href="register.php"> สมัครสมาชิก</a></p>-->
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>