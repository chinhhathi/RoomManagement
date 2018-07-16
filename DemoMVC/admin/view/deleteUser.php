
<!DOCTYPE>
<html>
<head>
    <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Delete</title>
</head>
<body>
<div class="container" style="margin: 0 auto;margin-top: 50px">

    <div style="text-align: center;font-size: 30px;margin-bottom: 20px;color: green">Delete Room</div>
    <?php
        $id_user = "";
        while ($data = mysqli_fetch_array($user)) {
            $id_user = $data['id_user'];
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
            <td style="font-size: 20px;font-weight: bold;">ID_Room</td>
            <td style="font-size: 20px;font-weight: bold;">Room_Name</td>
            <td style="font-size: 20px;font-weight: bold;">Time_Start</td>
            <td style="font-size: 20px;font-weight: bold;">Time_End</td>
            <th style="font-size: 20px;text-align: center;font-weight: bold;" colspan="2">Action</th>
        </tr>
        </tbody>
        <?php

        while ($data = mysqli_fetch_array($users)) {

            echo '<tr>
					<td width="50px" >'.$data["id_room"].'</td>
					<td width="100px">'.$data["name"].'</td>
					<td width="50px" >'.$data["time_start"].'</td>
					<td width="50px">'.$data["time_end"].'</td>
					<td style="padding: 3px 1px; width: 120px;text-align: center;"><a class=\'delete btn btn-danger\'  data-confirm=\'Are you sure want to delete?\' href="index.php?c=delete&&id='.$data["id_room"].'&&id_user='.$id_user.'">Delete</a></td>			
					</tr>';

        }

        ?>
    </table>

    <center><a href='index.php?c=view' class="btn btn-success">Return</a>
        <a href='index.php?c=logout' class="btn btn-success">Logout</a></center>
</div>
<script type="text/javascript">
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');

            }
        });
    };
</script>
</body>
</html>
