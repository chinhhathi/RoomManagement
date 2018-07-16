

<?php
require PATH_APPLICATION . '/model/Registers.php';

class CreateAdmin_Controller extends Controller {

    public function indexAction() {
 //       if (isset($_SESSION['admin'])) {
        $register = new Registers();
        $tblName = "users";
        $message = $message2 = $message3 = $message4 = "";
        if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password2 = $_POST["password2"];
            $role = $_POST["role"];
            $record = array("user_name" => $username,
                "password" => $password,
                "role" => $role);
            $condition = array("user_name" => $username);
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
            if ($username == "" || $password == "") {
                $message = "<p class = 'text2'> Mọi thông tin đều là bắt buộc</p>";
            } else {
                if (strlen($password) > 20 or strlen($password) < 6) {
                    $message2 = "<p class = 'text2'>Mật khẩu phải nhiều hơn 6 ký tự</p>";
                } else {
                    if ($password2 != $password) {
                        $message3 = "<p class = 'text2'>Mật khẩu không trùng nhau</p>";
                    } else {
                        $select = $register->select($tblName, $condition);
                        if ($select > 0) {
                            $message4 = "<p class = 'text2'>Tài khoản đã tồn tại</p>";
                        } else {
                            $insert = $register->insert($tblName, $record);

                                header('location:index.php?c=viewAdmin');

                        }

                    }

                }
            }
        }
        $this->view->load('createAdmin',    ['message' => $message,
            'message2'=> $message2,
            'message3' => $message3,
            'message4'=> $message4,
        ]);
        $this->view->show();
//    }
//        else
//            header('location:index.php?c=login');
    }
}

?>