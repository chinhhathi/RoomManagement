<?php
include PATH_APPLICATION . '/controller/Register_Controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public\css\register.css"/>
    <script type="text/javascript" src="public\js\register.js"></script>
    <style type="text/css"></style>
</head>
<body>

<form method="post">
    <div class="body">
        <div class="boder">
            <div class="register">
                <div class="title">
                    <center>
                        <span style="font-size: 24px;color: green">Đăng ký</span>
                    </center>
                </div>
                <input type="text" id="user" name="username" placeholder="Tên tài khoản">
                <input type="text" id="email" name="email" placeholder="Email">
                <input type="password" id="pass" name="password" placeholder="Nhập mật khẩu">
                <input type="password" id="repass" name="password2" placeholder="Nhập lại mật khẩu">
                <div id="thongbao">
                    <?php

                    if(isset($message)){
                        echo $message;
                    }
                    if(isset($message2)){
                        echo $message2;
                    }
                    if(isset($message3)){
                        echo $message3;
                    }
                    if(isset($message4)){
                        echo $message4;
                    }
                    ?>
                </div>
                <input type="submit" class="btn btn-primary" id="create" name="btn_submit" value="Đăng ký">
            </div>
        </div>
    </div>
</form>
</body>
</html>
