<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/Admin.php';

class ViewAdmin_Controller extends Controller {


    public function indexAction() {
            // Load view
        if (isset($_SESSION['admin'])) {
        $modelUser = new Admin();
        $users = $modelUser->getAdmin();
        $user = $modelUser->selectUser("users",$_SESSION['admin']);
        $this->view->load('viewAdmin', ['users' => $users,
            'user' => $user]);


        // Show view
        $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>