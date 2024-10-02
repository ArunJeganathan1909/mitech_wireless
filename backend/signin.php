<?php

include 'conn.php';

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

if($email=="admin@gmail.com" && $password=="admin"){
    $_SESSION['a_id']=1;
    $_SESSION['logged_in_success']=true;
        header('location:../admin/index.php');
        echo 200;
        exit();
}else{
    $_SESSION['logged_in_failed']=true;
    header('location:../index.php');
    exit();
}

?>