

<?php
require PATH_APPLICATION . '/model/Registers.php';

class CreateRoom_Controller extends Controller {

    public function indexAction() {
        $register = new Registers();
        $tblName = "users";
        $message = $message2 = "";
        if (isset($_POST["btn_submit"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $id = $_POST["id"];
            $name = $_POST["name"];

            $record = array("id_room" => $id,
                "name" => $name);
            $condition = array("id_room" => $id);
            //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
            if ($id == "" || $name == "") {
                $message = "<p class = 'text2'> Mọi thông tin đều là bắt buộc</p>";
            } else {
                        $select = $register->select($tblName, $condition);
                        if ($select > 0) {
                            $message2 = "<p class = 'text2'>Phòng khoản đã tồn tại</p>";
                        } else {
                            $insert = $register->insert("room", $record);

                                header('location:index.php?c=viewAdmin');
                        }

                    }



        }
        $this->view->load('createRoom',    ['message' => $message,
            'message2'=> $message2
        ]);
        $this->view->show();
    }
}

?>