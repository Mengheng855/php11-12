<?php
    try {
        $conn=mysqli_connect('localhost','root','','db_php_11-12');
        // echo 'success';
    } catch (Exception $e) {
        echo $e->getMessage();
    }