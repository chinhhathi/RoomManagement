
<!DOCTYPE>
<html>
<head>
    <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Danh sách</title>
</head>
<body>
<div class="container" style="margin: 0 auto;">

    <div style="text-align: center;font-size: 30px;margin-bottom: 20px;margin-top: 50px;color: green">Register Room</div>
    <?php

    while ($data = mysqli_fetch_array($user)) {
        $id = $data['id_user'];
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
            <td  style="font-weight: bold">ID_ROOM</td>
            <td  style="font-weight: bold">ID_USER</td>
            <td style="font-weight: bold">NAME</td>
            <td style="font-weight: bold">TIME START</td>
            <td style="font-weight: bold">TIME END</td>
        </tr>
        </tbody>
        <?php

        while ($data = mysqli_fetch_array($users)) {

            echo '<tr>
					<td width="50px" >'.$data["id_room"].'</td>
					<td width="50px" >'.$data["id_user"].'</td>
					<td width="150px">'.$data["name"].'</td>
					<td width="50px" >'.$data["time_start"].'</td>
					<td width="150px">'.$data["time_end"].'</td>		
			        
					</tr>';

        }

        ?>
    </table>
        <center>
            <a href="index.php?c=registerRoom&&user=<?php echo $user_name; ?>" class="btn btn-success">Register Room</a>
            <a href="index.php?c=update&&id=<?php echo $id; ?>" class="btn btn-primary">Update Information</a>
            <a href="index.php?c=deleteUser&&user=<?php echo $user_name; ?>"  class="btn btn-danger">Delete Information</a>

        </center>
        <div style="height: 30px"></div>
        <div style="float: right">
            <a href='index.php?c=logout' class="btn btn-success">Logout</a>
        </div>
        <div style="height: 50px"></div>
</div>
</body>
</html>