<?php
class DB {
    private $_conn;

    function __construct() {
        //$config = require PATH_SYSTEM . '/config/config.php';
        //$this->_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE) or die("không thể kết nối tới database");
        @$this->_conn = mysqli_connect('localhost', 'root', '', 'register') or die('không thể kết nối tới database');
        mysqli_query($this->_conn,"SET NAMES 'UTF8'");

    }

    function selectBySQL($tblName, $condition) {
        $sql = "SELECT DISTINCT * FROM $tblName WHERE $condition";
        $query = mysqli_query($this->_conn, $sql);

        return $query;
    }
    function selectAdmin($condition) {
        $sql = "SELECT * FROM `users` where $condition";

        $query = mysqli_query($this->_conn, $sql);
        $row = mysqli_fetch_array($query);
		$admin = array("user_name" => $row["user_name"],
                        "password" => $row["password"]);
        return $admin;
    }

    function selectCondition() {
        $sql = "SELECT users.id_user, users.user_name, users.password, room.id_room, room.name, register.time_start, register.time_end FROM `register`, `users`, `room` WHERE users.id_user = register.id_user AND room.id_room = register.id_room";
        $query = mysqli_query($this->_conn, $sql);

        return $query;
    }
    function selectRoom($username) {
        $sql = "SELECT room.id_room, room.name, register.time_start, register.time_end FROM room, register, users  WHERE room.id_room = register.id_room AND register.id_user = users.id_user AND users.user_name = '$username'";

        $query = mysqli_query($this->_conn, $sql);

        return $query;
    }

    function selectNullRoom() {
        $sql = "SELECT DISTINCT room.id_room, room.name
FROM room, register
WHERE room.id_room NOT IN (
    SELECT room.id_room
    FROM room, register
    WHERE room.id_room = register.id_room)";
        $query = mysqli_query($this->_conn, $sql);

        return $query;
    }

    function select2($table, $conditions) {
        if(is_array($conditions)) {

            /*  $cond = "SELECT * FROM `$table` WHERE ";
              foreach ($conditions as $key => $value) {
                  $cond .= "`$key`= '$value' AND ";

              }
              $cond .= "1";
              $sql = $cond;
              $query = mysqli_query($this->_conn, $sql);
              $row = mysqli_fetch_array($query);
              return $row;
            */
            $sql = "SELECT * FROM `$table`";
            if ($conditions != null) {
                $cond = array();
                foreach ($conditions as $key => $value) {
                    //array_push($cond, "`$key` = $value");
                    array_push($cond, "`$key` = '$value'");
                }
                $cond = implode(" AND ", $cond);
                $sql .= " WHERE ";
                $sql .= $cond;

                $query = mysqli_query($this->_conn, $sql);
                $num_rows = mysqli_num_rows($query);
                return $num_rows;
            }
            else {
                $query = mysqli_query($this->_conn, $sql);
                $num_rows = mysqli_num_rows($query);
                return $num_rows;
            }
        }


        else if(is_string($conditions)) {
            $sql = "SELECT * FROM `$table` where $conditions";

            $query = mysqli_query($this->_conn, $sql);
            return $query;
        }

    }
    function select($table, $conditions) {
        if(is_array($conditions)) {

            /*  $cond = "SELECT * FROM `$table` WHERE ";
              foreach ($conditions as $key => $value) {
                  $cond .= "`$key`= '$value' AND ";

              }
              $cond .= "1";
              $sql = $cond;
              $query = mysqli_query($this->_conn, $sql);
              $row = mysqli_fetch_array($query);
              return $row;
            */
            $sql = "SELECT * FROM `$table`";
            if ($conditions != null) {
                $cond = array();
                foreach ($conditions as $key => $value) {
                    //array_push($cond, "`$key` = $value");
                    array_push($cond, "`$key` = '$value'");
                }
                $cond = implode(" AND ", $cond);
                $sql .= " WHERE ";
                $sql .= $cond;

                $query = mysqli_query($this->_conn, $sql);
                $row = mysqli_fetch_array($query);
                return $row;
            }
            else {
                $query = mysqli_query($this->_conn, $sql);
                $row = mysqli_fetch_array($query);
                return $row;
            }
        }


        else if(is_string($conditions)) {
            $sql = "SELECT * FROM `$table` where $conditions";

            $query = mysqli_query($this->_conn, $sql);
            $row = mysqli_fetch_array($query);
            return $row;
        }

    }
    function selectUser($tblName, $username) {
        $sql = "SELECT * FROM `$tblName` WHERE `user_name` = '$username'";

        $query = mysqli_query($this->_conn, $sql);

        return $query;
    }

    function insert($table, $record) {

        $con = array();
        if (!empty($record)) {
            foreach ($record as $key => $value) {
                array_push($con, array("$key", "$value"));
            }
        }

        $key = array();
        for ($i = 0; $i < count($record); $i++) {
            array_push($key, $con[$i][0]);
        }
        $value = array();
        for ($i = 0; $i < count($record); $i++) {
            array_push($value, $con[$i][1]);
        }
        $key = implode(",", $key);
        $value = implode("', '", $value);
        $str = "'" ;
        $str .=$value;
        $str .= "'";

        $sql = "INSERT INTO `$table`($key) VALUES($str)";
        $query = mysqli_query($this->_conn,$sql);
        return $query;


    }

    function update($table, $record, $conditions) {

        if(is_array($conditions)) {
            if ($conditions != null) {
                if (!empty($record)) {
                    $con = array();
                    foreach ($conditions as $key => $value) {
                        foreach ($record as $key2 => $value2) {
                            array_push($con, "`$key2`='$value2'");
                        }
                        $con = implode(", ", $con);
                        $sql = "UPDATE `$table` SET $con WHERE `$key` = $value";

                        $query = mysqli_query($this->_conn, $sql);
                        return $query;
                    }
                }
            }

        }

        if(is_string($conditions)) {
            $con = array();
            foreach ($record as $key2 => $value2) {
                array_push($con, "`$key2`='$value2'");
            }
            $con = implode(",", $con);
            $sql = "UPDATE `$table` SET $con WHERE $conditions";;
            $query = mysqli_query($this->_conn, $sql);
            return $query;
        }

    }

    function delete($table, $conditions) {
        if(is_array($conditions)) {
            if ($conditions != null) {
                foreach ($conditions as $key => $value) {
                    $sql = $sql = "DELETE FROM `$table` WHERE `$key`='$value'";
                    $query = mysqli_query($this->_conn, $sql);
                    return $query;
                }
            }

        }

        if(is_string($conditions)) {
            $sql = $sql = "DELETE FROM `$table` WHERE $conditions";
            $query = mysqli_query($this->_conn, $sql);
            return $query;
        }
    }


}
?>
