<?php
    require 'connection.php';
    $id=$_GET['id'];
    $delete="DELETE FROM tbl_product WHERE id='$id'";
    $ex=$conn->query($delete);
    if($ex){
        header('location: table.php');
    }