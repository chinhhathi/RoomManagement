<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/DeleteUser.php';

class DeleteAdmin_Controller extends Controller {


    public function indexAction() {

        if (isset($_SESSION['admin'])) {

            $modelUser = new DeleteUser();
            $id = $_GET['id'];
            $condition = "id_user = $id";

            $delete = $modelUser->delete("users", $condition);
            require PATH_APPLICATION .'/view/deleteAdmin.php';
        }
        else
            header('location:index.php?c=login');
    }

}
?>