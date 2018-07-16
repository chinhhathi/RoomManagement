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
                        <span style="font-size: 24px;color: green">Create New Room</span>
                    </center>
                </div>
                <input type="text" id="user" name="id" placeholder="Room ID">
                <input type="text" id="pass" name="name" placeholder="Room Name">
                <div id="thongbao">
                    <?php

                    if(isset($message)){
                        echo $message;
                    }
                    if(isset($message2)){
                        echo $message2;
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