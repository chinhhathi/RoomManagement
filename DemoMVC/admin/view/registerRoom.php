
<!DOCTYPE>
<html>
<head>
    <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public\css\register.css"/>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Register Room</title>
</head>
    <form method="post">
<div class="container" style="margin: 0 auto;margin-top: 50px">

    <div style="text-align: center;font-size: 30px;margin-bottom: 20px;color: green">Register Room</div>
    <?php

    while ($data = mysqli_fetch_array($user)) {
        $id_user = $data['id_user'];
        echo '        
                    <div style="text-align: right;">ID User: '.$data['id_user'].'</div>
                    <div style="text-align: right;">Username: '.$data['user_name'].'</div>			
			        <div style="text-align: right;">Role: '.$data['role'].'</div>
					';

    }
    ?>
    <center><div style="text-align: center">Room Null</div></center>
    <table  class="container table table-hover table-bordered" style="margin-top: 20px;text-align: center;">
        <tbody>
        <tr class="info">
            <td style="font-size: 20px;font-weight: bold;">Room ID</td>
            <td style="font-size: 20px;font-weight: bold;">Room Name</td>
            <td style="padding: 3px 1px; width: 120px;text-align: center;">Action</td>

        </tr>
        </tbody>
        <?php

        while ($data = mysqli_fetch_array($users)) {
            echo '<tr>
					<td width="50px" >'.$data["id_room"].'</td>
					<td width="100px">'.$data["name"].'</td>
					<td style="padding: 3px 1px; width: 120px;text-align: center;"><a  class="btn btn-primary" onclick="myFunction()">Register</a></td>
					
					</tr>';

        }

        ?>
    </table>
    <center><div style="text-align: center">Room Registered</div></center>
    <table  class="container table table-hover table-bordered" style="margin-top: 20px;text-align: center;">
        <tbody>
        <tr class="info">
            <td  style="font-weight: bold">ID_ROOM</td>
            <td  style="font-weight: bold">ID_USER</td>
            <td style="font-weight: bold">NAME</td>
            <td style="font-weight: bold">TIME START</td>
            <td style="font-weight: bold">TIME END</td>
            <td style="font-weight: bold">ACTION</td>
        </tr>
        </tbody>
        <?php

        while ($data = mysqli_fetch_array($room)) {
            echo '<tr>
					<td width="50px" >'.$data["id_room"].'</td>
					<td width="50px" >'.$data["id_user"].'</td>
					<td width="150px">'.$data["name"].'</td>
					<td width="50px" >'.$data["time_start"].'</td>
					<td width="150px">'.$data["time_end"].'</td>		
			        <td style="padding: 3px 1px; width: 120px;text-align: center;"><a  class="btn btn-primary" onclick="myFunction()">Register</a></td>	
					
					</tr>';

        }
        //href=\'index.php?c=register&id='.$data["id_room"].'\'
        ?>
    </table>
    <center>
        <a href='index.php?c=view' class="btn btn-primary">Return</a></center>
    <div style="height: 30px;"></div>
    <div style="float: right">
        <a href='index.php?c=logout' class="btn btn-success">Logout</a>
    </div>

        <center>
        <div id="infor" style="display: none;">
        <div class="body">
            <div class="boder">
                <div class="register">
                    <div class="title">
                        <center>
                            <span style="font-size: 24px;color: green">Enter time</span>
                        </center>
                    </div>

                    <input type="text" name="id_user" value="<?php echo $id_user ?>" readonly>
                    <input type="text" name="id_room" placeholder="Enter id room">
                    <input type="text" name="time_start" placeholder="Enter time-start">
                    <input type="text" name="time_end" placeholder="Enter time-end">
                    <div id="thongbao">
                        <?php

                        if(isset($message)){
                            echo $message;
                        }
                        ?>
                    </div>
                    <center>
                        <input type="submit" class="btn btn-primary" id="create" class="btn btn-success" name="btn_submit" value="Register">
                        <a href="index.php?c=registerRoom&&id_user=<?php echo $id_user ?>" class="btn btn-primary">Return</a>
                    </center>
                </div>
            </div>
        </div>
        </div>
        </center>
    <div style="height: 50px;"></div>
</div>
</form>
<script>
    function myFunction() {
        var x = document.getElementById("infor");
        if (x.style.display == "none") {
            x.style.display = "block";
        }
    }

    document.getElementById("infor").appendChild(div);
</script>
</body>
</html>
