<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/Update.php';

class UpdateRoomName_Controller extends Controller {


    public function indexAction() {
        // Load view
        $user = [];
        $user_name = null;
        if (isset($_SESSION['admin'])) {
            $update = new Update();
            $tblName = "room";
            $id_room = $_GET['id'];
            $condition = array("id_room" => $id_room);

            $user = $update->select($tblName, $condition);

            if(isset($_POST['update'])) {

                $record = array("name" => $_POST["name"]);
                $up = $update->update("room", $record, $condition);
                header('location:index.php?c=updateRoom');

            }

            $this->view->load('updateRoomName', ["user"=>$user]);


            // Show view
            $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>