<?php
require_once "configs/database.php";
class Model{
    public function OpenConnect()
    {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
        if (!$connection) {
            die("Không thể kết nối với database" . mysqli_connect_error());
        }
        return $connection;
    }
}