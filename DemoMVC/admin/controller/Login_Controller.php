<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 7/10/2018
 * Time: 3:35 PM
 */

session_start();

require PATH_APPLICATION . '/model/Login.php';

class Login_Controller extends Controller {

    public function indexAction() {
        $log = new Login();
        $tblName = "users";
        $message = "";
        if (isset($_POST["submit_button"])) {
            //Lấy thông tin account
            $username = $_POST["username"];
            $password = $_POST["password"];

            $condition = array("user_name" => $username,
                "password" => $password);

            $login = $log->select($tblName, $condition);
            $admin = $log->selectAdmin("role = 1");
            if ($username == $admin['user_name'] && $password == $admin['password']) {
                $_SESSION['admin'] = $_POST['username'];
                header('location:index.php?c=viewAdmin');
            }
            else if ($login == 0) {
                $message = "<p class='textphp'>Tên đăng nhập hoặc mật khẩu không đúng !</p>";
            }
            else {
                $_SESSION['username'] = $_POST['username'];
                header('location:index.php?c=view');

            }


             }

        $this->view->load('login', ['message'=>$message]);
        $this->view->show();

    }


}

?>