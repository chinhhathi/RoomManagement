<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');


session_start();

require PATH_APPLICATION . '/model/User.php';

class View_Controller extends Controller {


    public function indexAction() {
        // Load view
    if (isset($_SESSION['username'])) {

        $modelUser = new User();
        $users = $modelUser->getListUsers();
        $user_name = $_SESSION['username'];
        $user = $modelUser->selectUser("users",$user_name);
        $this->view->load('view', ['users' => $users,
                                        'user' => $user,
                                        'user_name'=> $user_name]);


        // Show view
        $this->view->show();
    }
    else
        header('location:index.php?c=login');
    }

}
?>