
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public\css\login.css"/>
    <style type="text/css"></style>
</head>
<body>


<div class="body">
    <form method="post">
        <div class="boder">
            <div class="login">
                <div class="title">
                    <center>
                        <span style="font-size: 24px;color: green"  >Đăng nhập</span>
                    </center>
                </div>
                <input type="text" id="username" name="username" placeholder="Tên tài khoản">
                <input type="password" id="password" name="password" placeholder="  Nhập mật khẩu">
                <div id="thongbao"></div>
                <?php
                if (!empty($message)) {
                    echo $message;
                }
                ?>

                <center><input type="submit" class="btn btn-success" id="login" name="submit_button" value="Đăng nhập"><center>
            </div>
        </div>
    </form>
</div>

</body>
</html>


