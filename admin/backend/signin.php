<?php

include '../../backend/conn.php';

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if($email=="admin@gmail.com" && $password=="admin"){
    $_SESSION['a_id']=1;
    $_SESSION['logged_in_success']=true;
        header('location:../index.php');
        echo 200;
        exit();
}else{
    $_SESSION['logged_in_failed']=true;
    header('location:../login.php');
    exit();
}

?>