<?php
session_start();
include_once 'connection.php';

if(!empty($_POST)){
    $table = "tbl_user_data";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkForAllreadyPhone = $conn->query("SELECT * FROM $table WHERE email='$email' AND Password = '$password'");
    if ($checkForAllreadyPhone->num_rows > 0) {
        $userData = $checkForAllreadyPhone->fetch_all(MYSQLI_ASSOC);
        $_SESSION['svtc_user_login']=1;
        $_SESSION['svtc_user_detais'] = $userData[0];
        $output = ['status'=>true,'msg'=>"Phone number allready exist!"];
        
    }else{
        $output = ['status'=>false,'msg'=>"Invalid details entered!"];
    }
}else{
    $output = ['status'=>false,'msg'=>"Invalid Request"];
}
echo json_encode($output);die();