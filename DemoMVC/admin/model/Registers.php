<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 7/3/2018
 * Time: 2:32 PM
 */
require PATH_SYSTEM . '/core/Model.php';
class Registers extends Model {
    public $pk = 'id_user';
    public $tblName = 'users';

    public function getListUsers() {
        $users = $this->selectBySQL($this->tblName);

        return $users;
    }

    public function insertUser($condition) {
        $user = $this->insert($this->tblName, $condition);

        return $user;
    }


}
?>