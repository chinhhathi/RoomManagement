<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/Update.php';

class UpdateRoom_Controller extends Controller {


    public function indexAction() {
        // Load view

        $user_name = null;
        if (isset($_SESSION['admin'])) {
            $update = new Update();
            $tblName = "room";

            $users = $update->selectBySQL($tblName, "1");

            $user = $update->selectUser("users",$_SESSION['admin']);

            $this->view->load('updateRoom', ["users"=>$users,
                'user' => $user]);


            // Show view
            $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>