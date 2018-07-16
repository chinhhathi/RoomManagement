
<!DOCTYPE>
<html>
<head>
    <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Danh sách</title>
</head>
<body>
<div class="container" style="margin: 0 auto;margin-top: 50px">

    <div style="text-align: center;font-size: 30px;margin-bottom: 20px;color: green">Manage User & Room</div>
    <?php

    while ($data = mysqli_fetch_array($user)) {

        echo '    
                    <div style="text-align: right;">ID User: '.$data['id_user'].'</div>
                    <div style="text-align: right;">Username: '.$data['user_name'].'</div>			
			        <div style="text-align: right;">Role: '.$data['role'].'</div>
					';

    }
    ?>
    <table  class="container table table-hover table-bordered" style="margin-top: 20px;text-align: center;">
        <tbody>
        <tr class="info">
            <td style="font-size: 20px;font-weight: bold;">ID_User</td>
            <td style="font-size: 20px;font-weight: bold;">Username</td>
            <td style="font-size: 20px;font-weight: bold;">Password</td>
            <td style="font-size: 20px;font-weight: bold;">ID_Room</td>
            <td style="font-size: 20px;font-weight: bold;">Room_Name</td>
            <td style="font-size: 20px;font-weight: bold;">Time_Start</td>
            <td style="font-size: 20px;font-weight: bold;">Time_End</td>
        </tr>
        </tbody>
        <?php

        while ($data = mysqli_fetch_array($users)) {

            echo '<tr>
					<td width="50px" >'.$data["id_user"].'</td>
					<td width="100px">'.$data["user_name"].'</td>
					<td width="100px">'.$data["password"].'</td>
					<td width="50px" >'.$data["id_room"].'</td>
					<td width="100px">'.$data["name"].'</td>
					<td width="50px" >'.$data["time_start"].'</td>
					<td width="50px">'.$data["time_end"].'</td>		
					</tr>';

        }

        ?>
    </table>

    <center><a href='index.php?c=createUser' class="btn btn-success">Create new account</a>
        <a href='index.php?c=createRoom' class="btn btn-primary">Create new room</a>
        <a href='index.php?c=updateAdmin' class="btn btn-success">Update User</a>
        <a href='index.php?c=updateRoom' class="btn btn-primary">Update room</a></center>
    <div style="height: 30px;"></div>
    <div style="float: right">
        <a href='index.php?c=logout' class="btn btn-success">Logout</a>
    </div>
    <div style="height: 50px;"></div>
</div>

</body>
</html>
