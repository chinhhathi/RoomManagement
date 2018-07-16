<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

session_start();

require PATH_APPLICATION . '/model/User.php';

class RegisterRoom_Controller extends Controller {


    public function indexAction() {
        // Load view
        $user_name = null;
        $message = "";
        if (isset($_SESSION['username'])) {
            $register = new User();
            $tblName = "room";
            $tblName2 = "register";

            $users = $register->selectNullRoom();

            $room = $register->getListUsers();
            $user = $register->selectUser("users",$_SESSION['username']);

            if (isset($_POST["btn_submit"])) {
                $time_start = $_POST["time_start"];
                $time_end = $_POST["time_end"];
                $id_user = $_POST['id_user'];
                $id_room = $_POST['id_room'];

                $condition = array("id_room" => $id_room,
                    "id_user" => $id_user,
                    "time_start" => $time_start,
                    "time_end" => $time_end);

                $condition2 = array("id_room" => $id_room,
                    "time_start" => $time_start);

                $condition3 = array(
                    "id_user" => $id_user,
                    "time_start" => $time_start);


                if ($register->select2($tblName2, $condition) > 0 ||
                    $register->select2($tblName2, $condition2) > 0 ||
                    $register->select2($tblName2, $condition3) > 0) {
                    $message = "Bạn đã đăng ký trùng lịch! Vui lòng nhập lại!1!";
                }
                else {
                    $register->insert($tblName2, $condition);
                    header('location:index.php?c=view');
                }
            }
            $this->view->load('registerRoom', ["users"=>$users,
                "room" => $room,
                'user' => $user,
                'message' => $message]);


            // Show view
            $this->view->show();
        }
        else
            header('location:index.php?c=login');
    }

}
?>