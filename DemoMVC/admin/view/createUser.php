<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="public\css\register.css"/>
    <script type="text/javascript" src="public\js\register.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>
</head>
<body>

<form method="post">
    <div class="body">
        <div class="boder">
            <div class="register">
                <div class="title">
                    <center>
                        <span style="font-size: 24px;color: green">Create New Account</span>
                    </center>
                </div>
                <input type="text" id="user" name="username" placeholder="Enter username">
                <input type="password" id="pass" name="password" placeholder="Enter password">
                <input type="password" id="repass" name="password2" placeholder="Re-enter password">
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
                <center>
                    <input type="submit" class="btn btn-primary" id="create" class="btn btn-success" name="btn_submit" value="Create">
                </center>
            </div>
        </div>
    </div>
</form>
</body>
</html>