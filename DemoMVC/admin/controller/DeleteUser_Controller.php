<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/DeleteUser.php';

class DeleteUser_Controller extends Controller {


    public function indexAction() {

        if (isset($_SESSION['username'])) {
            $user_check = $_GET['user'];
            $condition = array("user_name" => $user_check);

            $modelUser = new DeleteUser();
            $users = $modelUser->selectRoom($user_check);
            $user = $modelUser->selectUser("users",$user_check);
            $this->view->load('deleteUser', ['users' => $users,
                                                    'user' => $user]);

            // Show view
            $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>