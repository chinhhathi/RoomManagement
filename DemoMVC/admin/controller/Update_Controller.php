<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/Update.php';

class Update_Controller extends Controller {


    public function indexAction() {
        // Load view
        $user = [];
        $user_name = null;
        if (isset($_SESSION['username'])) {
            $update = new Update();
            $tblName = "users";
            $id = $_GET['id'];
            $condition = array("id_user" => $id);

            $user = $update->select($tblName, $condition);



            if(isset($_POST['update'])) {

                $record = array("user_name" => $_POST["new_user"],
                    "password" => $_POST["new_pass"]);
                $up = $update->update($tblName, $record, $condition);

                header('location:index.php?c=view');

            }

            $this->view->load('update', ["user"=>$user]);


            // Show view
            $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>