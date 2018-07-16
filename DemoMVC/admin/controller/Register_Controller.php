<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
require PATH_APPLICATION . '/model/Registers.php';

class Register_Controller extends Controller {
    public function registerAction() {
        $registers = new Register();
        $tblName = 'user';
        if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password2 = $_POST["password2"];
            $email = $_POST["email"];
            $record = array("username" => $username,
                "password" => $password);
            var_dump($record);die;
            $condition = array("username"=>$username);
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
            if ($username == "" || $password == "" || $email == "" ) {
                $message = "<p class = 'text2'> Mọi thông tin đều là bắt buộc</p>";

            }else {
                if(strlen($password) > 20 or  strlen($password) < 6){
                    $message2 = "<p class = 'text2'>Mật khẩu phải nhiều hơn 6 ký tự</p>";
                }else{
                    if($password2 != $password){
                        $message3 = "<p class = 'text2'>Mật khẩu không trùng nhau</p>";
                    }else{
                        $select = $registers->select($tblName,$condition);


                        if($select  > 0){
                            $message4 = "<p class = 'text2'>Tài khoản đã tồn tại</p>";

                        }else {
                            //thực hiện việc lưu trữ dữ liệu vào db

                            $insert = $registers->insert($tblName, $record);

                        }

                    }

                }
            }
        }
        $this->view->load('register',[]);

        $this->view->show();
    }
}

?>