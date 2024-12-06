<?php
session_start();
require_once 'Instances.php';
require_once 'dbconfig.php';
$db = Instances::get('DB');
if (isset($_POST['action']) && !empty($_POST['action'])) {
    $function2call = $_POST['action'];
    switch ($function2call) {
        case 'basic_details':
            basic_details($_POST);
            break;
        case 'verifyOtp':
            verifyOtp($_POST);
            break;
        case 'saveUserDetails':
            saveUserDetails($_POST);
            break;
        case 'saveUserProfileDetails':
            saveUserProfileDetails($_POST);
            break;
        case 'getUserName':
            getUserName($_POST);
            break;
        case 'saveUserRunDetails':
            saveUserRunDetails($_POST);
            break;
    }
}

function basic_details($data)
{
    $db = Instances::get('DB');
    if (!empty($data)) {
        parse_str($data["formdata"], $formValues);
        $table = 'tbl_schollarship_part_1';
        $checkAllreadyData = $db->query("SELECT * FROM $table where application_id='{$formValues['id']}'");
        $mother_name = "";
            $father_name = "";
            if (isset($formValues['parent_type']) && $formValues['parent_type'] != '') {
                if ($formValues['parent_relation'] == 'father') {
                    $father_name = $formValues['single_parent_name'];
                } else {
                    $mother_name = $formValues['single_parent_name'];
                }
            } else {
                $father_name = $formValues['father_name'];
                $mother_name = $formValues['mother_name'];
            }
            $insertData = [
                'aadhar_no' => $formValues['adhaar_number'],
                'application_id' => $formValues['id'],
                'name' => $formValues['full_name'],
                'email_id' => $formValues['email'],
                'phone_no' => $formValues['phone'],
                'dob' => $formValues['dob-year'] . '-' . $formValues['dob-month'] . '-' . $formValues['dob-day'],
                'gender' => $formValues['gender'],
                'single_parent' => isset($formValues['parent_type']) ? '1' : '2',
                'father_name' => $father_name,
                'mother_name' => $mother_name,
                'parent_relation'=> @$formValues['parent_relation'],
                'no_of_brother' => $formValues['no_of_brother'],
                'no_of_sister' => $formValues['no_of_sister'],
                'status' => '1'
            ];
        if (empty($checkAllreadyData)) {
            $insetId = $db->insertQuery($table,$insertData);
            if($insetId > 0 ){
                $output = ['status'=>true,'msg'=>'Successfully Saved!'];
            }else{
                $output = ['status'=>false,'msg'=>'Internal Server Error!'];
            }
           
        } else {
            $db->updateQuery($table,$insertData,'id',$formValues['id']);
            $output = ['status'=>true,'msg'=>'Successfully Saved!'];
        }
    }
    echo json_encode($output);
}
