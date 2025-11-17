<?php
    include 'connection.php';
    if(isset($_POST['btnSave'])){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $email=$_POST['eamil'];
        $insert="INSERT INTO student (username,sex,email) VALUES ($name,$gender,$email)";
        $ex=mysqli_query($conn,$insert);
        if($ex){
            header('location: index.php');
        }else{
            header('location: index.php');
        }
    }