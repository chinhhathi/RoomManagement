
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="choose.css"/>
</head>
<body>
    <div class="container" style="margin-top: 50px; width: 500px;">
        <h2 style="color: green;text-align: center;margin-bottom: 20px;">UPDATE USER</h2>
    <form class="form-horizontal" role="form" method="post">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">User:</label>
        <div class="col-sm-10">
          <input type="hidden" name="userid" value="<?php echo $user['id_user']; ?>" class="form-control" id="inputEmail3">
          <input type="text" name="new_user" class="form-control" id="inputEmail3" value="<?php echo $user['user_name'] ?>">
      </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-10">
      <input type="password" name="new_pass" value="<?php echo $user['password'] ?>" class="form-control" id="inputPassword3">
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="update" class="btn btn-success">UPDATE</button>
        <a href='index.php?c=view' class="btn btn-primary">Return</a>
  </div>
</div>
</form>
</div>
</body>
</html>
