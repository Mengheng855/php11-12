<?php
    try {
        $conn=mysqli_connect('127.0.0.1','root','','db_php_11-12');
        // echo 'success';
    } catch (Exception $th) {
        echo $th->getMessage();
    }