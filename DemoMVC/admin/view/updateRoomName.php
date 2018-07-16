
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public\css\register.css"/>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="choose.css"/>
</head>
<body>
<div class="container" style="margin-top: 50px; width: 700px;">
    <div class="title">
        <center>
            <span style="font-size: 24px;color: green">Update Room</span>
        </center>
    </div>
    <form class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Room ID:</label>
            <div class="col-sm-10">
                <input type="text" name="id_user" class="form-control" id="inputEmail3" value="<?php echo $user['id_room'] ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" name="name" value="<?php echo $user['name'] ?>" class="form-control" id="inputPassword3">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="index.php?c=updateRoom" class="btn btn-success">Return</a>
                <button type="submit" name="update" class="btn btn-success">Update</button>

            </div>
        </div>
    </form>
</div>
</body>
</html>
