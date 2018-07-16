<?php
require_once(PATH_SYSTEM . '/core/DB.php');

class Model extends DB {
    public $pk;
    public $tblName;

    function select($tblName, $conditions) {
        return parent::select($tblName, $conditions);
    }


    function insert($tblName, $record) {
        return parent::insert($tblName, $record);
    }

    function update($tblName, $record, $conditions) {
        return parent::update($tblName, $record, $conditions);
    }

    function delete($tblName, $conditions) {
        return parent::delete($tblName, $conditions);
    }

}
?>
