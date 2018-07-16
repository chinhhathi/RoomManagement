<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/DeleteUser.php';

class DeleteRoom_Controller extends Controller {


    public function indexAction() {

        if (isset($_SESSION['admin'])) {

            $modelUser = new DeleteUser();
            $id = $_GET['id'];
            $condition = "id_room = $id";

            $delete = $modelUser->delete("room", $condition);
            require PATH_APPLICATION .'/view/deleteRoom.php';
        }
        else
            header('location:index.php?c=login');
    }

}
?>