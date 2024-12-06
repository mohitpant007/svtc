<?php
include_once 'connection.php';
if(!empty($_POST)){
    $table = "tbl_user_data";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    //check for same phone
    $allreadyFlag = 0;
    $checkForAllreadyPhone = $conn->query("SELECT * FROM $table WHERE mobile=$phone");
    if ($checkForAllreadyPhone->num_rows > 0) {
        $output = ['status'=>false,'msg'=>"Phone number allready exist!"];
        $allreadyFlag = 1; 
    }

    //check for email
    $checkForAllreadyEmail = $conn->query("SELECT * FROM $table WHERE email='$email'");
    if ($checkForAllreadyEmail->num_rows > 0) {
        $output = ['status'=>false,'msg'=>"Email id allready exist!"];
        $allreadyFlag = 1; 
    }
    if($allreadyFlag == 0){
        $stmt = $conn->prepare("INSERT INTO $table (name, email, password,mobile) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $email, $password, $phone); // "sss" indicates 3 string parameters

        // Execute the statement
        if ($stmt->execute()) {
            $output = ['status'=>true,'msg'=>"Successfully Registered!"];
        } else {
            $output = ['status'=>false,'msg'=>$stmt->error];
            
        }
        // Close the statement
        $stmt->close();
    }

}else{
    $output = ['status'=>false,'msg'=>"Invalid Request"];
}
echo json_encode($output);die();