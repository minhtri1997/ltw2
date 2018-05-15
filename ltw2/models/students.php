<?php

class students {
    public function connect() {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    //Lấy tất cả dữ liệu
        $sql = 'SELECT * FROM students';

        $data = mysqli_query($connection, $sql);

        $rows = [];

        while ($row = mysqli_fetch_assoc($data)) {
            $rows[] = $row;
        }

        return $rows;
    }
    public function getDataById($id) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    //Lấy tất cả dữ liệu
        $sql = "SELECT * FROM students WHERE(student_id = '$id')";

        $data = mysqli_query($connection, $sql);

        $rows = [];

        while ($row = mysqli_fetch_assoc($data)) {
            $rows[] = $row;
        }

        return $rows;
    }
    public function insertData($name)
    {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    $sql = "INSERT INTO students(student_name) values('$name')";

    $data = mysqli_query($connection, $sql);
    return $data;
    }
    public function deleteById($id)
    {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        $sql = "DELETE FROM students WHERE(student_id = '$id')";

    $data = mysqli_query($connection, $sql);
    return $data;
    }
}