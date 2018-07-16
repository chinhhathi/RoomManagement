<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 7/2/2018
 * Time: 8:44 AM
 */


    require_once(PATH_SYSTEM . "/config/config.php");

    class Model {

        protected $_conn;

        public function __construct() {
            //@$this->_conn = mysqli_connect(config:: DB_HOST,config:: DB_USER,config:: DB_PASSWORD, config:: DB_DATABASE) or die("không thể kết nối tới database");
            @$this->_conn = mysqli_connect('localhost', 'root', '', 'register') or die('không thể kết nối tới database');
            mysqli_query($this->_conn,"SET NAMES 'UTF8'");
        }

        public function getUser() {
            $sql = "SELECT * FROM `users`";
            $query = mysqli_query($this->_conn,$sql);
            return $query;
        }


    }

?>