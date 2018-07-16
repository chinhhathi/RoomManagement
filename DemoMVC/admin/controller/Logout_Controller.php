<?php
session_start();

class Logout_Controller extends Controller {


    public function indexAction() {
        // Load view

            session_destroy();
            header('location:index.php?c=login');

//            $this->view->load('logout', []);
//
//            $this->view->show();

    }

}
?>