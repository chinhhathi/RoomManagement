<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/DeleteUser.php';

class Delete_Controller extends Controller {


    public function indexAction() {

        if (isset($_SESSION['username'])) {

            $modelUser = new DeleteUser();
            $user_name = $_SESSION['username'];
            $id = $_GET['id'];
            $id_user = $_GET['id_user'];
            $condition = "id_room = $id AND id_user = $id_user";

            $delete = $modelUser->delete("register", $condition);
            require PATH_APPLICATION .'/view/delete.php';
        }
        else
            header('location:index.php?c=login');
    }

}
?>