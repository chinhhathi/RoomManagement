<?php
/**
 * Created by PhpStorm.
 * User: kydonvn
 * Date: 02/07/2018
 * Time: 11:27
 */
require PATH_SYSTEM . '/core/Model.php';
class User extends Model {
    public $pk = 'id_room';
    public $tblName = 'room,register';

    public function getListUsers() {
        $users = $this->selectBySQL($this->tblName, "room.id_room = register.id_room");

        return $users;
    }

}

?>