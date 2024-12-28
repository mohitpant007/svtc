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
        case 'family_details':
            family_details($_POST);
            break;
    }
}

function basic_details($data)
{
    $db = Instances::get('DB');
    if (!empty($data)) {
        $formValues = $data;
        $table = 'tbl_schollarship_part_1';
        $checkAllreadyData = $db->query("SELECT * FROM $table where user_id={$formValues['id']}");
        $db->startTransaction();
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
        if (isset($formValues['staying_in_hostel']) && $formValues['staying_in_hostel'] != '') {
            $is_staying_hostel_pg = '1';
        } else {
            $is_staying_hostel_pg = '2';
        }
        if (isset($formValues['same-current-address']) && $formValues['same-current-address'] != '') {
            $same_current_address = '1';
        } else {
            $same_current_address = '2';
        }
        $applictionId = 'SVTC' . $formValues['id'] . generateUnique12DigitNumber();
        $pancard_image = "";
        $aadhaar_image = "";
        if (isset($_FILES['pancard_image']) && $_FILES['pancard_image'] != "" && $_FILES['pancard_image']['tmp_name'] != "") {
            $pancard_image = $applictionId . '-pancard-' . time() . '.png';
            $pancardFileDestination = UPLOAD_DIR . $pancard_image;
            $fileTmpPathPancard = $_FILES['pancard_image']['tmp_name'];
            move_uploaded_file($fileTmpPathPancard, $pancardFileDestination);
        } else {
            $pancard_image = isset($checkAllreadyData[0]['pancard_image']) && $checkAllreadyData[0]['pancard_image'] != "" ? $checkAllreadyData[0]['pancard_image'] : "";
        }
        if (isset($_FILES['aadhaar_image']) && $_FILES['aadhaar_image'] != "" && $_FILES['aadhaar_image']['tmp_name'] != "") {
            $aadhaar_image = $applictionId . '-aadhaar-' . time() . '.png';
            $fileTmpPathAadhaar = $_FILES['aadhaar_image']['tmp_name'];
            $aadhaarFileDestination = UPLOAD_DIR . $aadhaar_image;
            move_uploaded_file($fileTmpPathAadhaar, $aadhaarFileDestination);
        } else {
            $aadhaar_image = isset($checkAllreadyData[0]['aadhaar_image']) && $checkAllreadyData[0]['aadhaar_image'] != "" ? $checkAllreadyData[0]['aadhaar_image'] : "";
        }
        $insertData = [
            'aadhar_no' => $formValues['adhaar_number'],
            'application_id' => $applictionId,
            'user_id' => $formValues['id'],
            'name' => $formValues['full_name'],
            'email_id' => $formValues['email'],
            'phone_no' => $formValues['phone'],
            'dob' => $formValues['dob'],
            'gender' => $formValues['gender'],
            'single_parent' => isset($formValues['parent_type']) ? '1' : '2',
            'father_name' => $father_name,
            'mother_name' => $mother_name,
            'parent_relation' => @$formValues['parent_relation'],
            'no_of_brother' => $formValues['no_of_brother'],
            'no_of_sister' => $formValues['no_of_sister'],
            'state' => $formValues['state'],
            'country' => 'India',
            'marital_status' => $formValues['marital_status'],
            'pancard_no' => @$formValues['pancard_no'],
            'is_staying_hostel_pg' => $is_staying_hostel_pg,
            'hostel_pg_address' => @$formValues['hostel_pg_address'],
            'status' => '1',
            'pancard_image' => $pancard_image,
            'aadhaar_image' => $aadhaar_image,
            'is_same_address' => $same_current_address,
            'present_address' => trim($formValues['current_address']),
            'permanent_address' => trim($formValues['permanent_address']),
            'apaar_no' => $formValues['apaar_no']
        ];
        if (empty($checkAllreadyData)) {
            $insetId = $db->insertQuery($table, $insertData);
            if ($insetId > 0) {
                $db->commitTransaction();
                $output = ['status' => true, 'msg' => 'Successfully Saved!'];
            } else {
                $db->rollbackTransaction();
                $output = ['status' => false, 'msg' => 'Internal Server Error!'];
            }
        } else {
            // echo "<pre>";print_r($insertData);die();
            $db->updateQuery($table, $insertData, 'id', $formValues['id']);
            $db->commitTransaction();
            $output = ['status' => true, 'msg' => 'Successfully Saved!'];
        }
    }
    echo json_encode($output);
}
function family_details($data)
{
    $db = Instances::get('DB');
    if (!empty($data)) {
        $formValues = $data;
        $db->startTransaction();
        $table = 'tbl_schollarship_part_2';
        $userId = $_SESSION['svtc_user_detais']['id'];
        $applictionId = 'SVTC' . $userId . generateUnique12DigitNumber();
        $table1 = 'tbl_schollarship_part_1';
        $userBasicDetails = $db->query("SELECT * FROM $table1 where user_id=$userId");
        if (isset($formValues['relationship_single_parent_type']) && $formValues['relationship_single_parent_type'] != "") {
            $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='single_parent'");
            if (isset($_FILES['single_parent_doc']) && $_FILES['single_parent_doc'] != "" && $_FILES['single_parent_doc']['tmp_name']!="") {
                $singleParentDoc = $applictionId . '-single-parent-doc-' . time() . '.pdf';
                $singleParentDocFileDestination = UPLOAD_DIR . 'family-details/' . $singleParentDoc;
                $fileTmpPathsingleParentDoc = $_FILES['single_parent_doc']['tmp_name'];
                move_uploaded_file($fileTmpPathsingleParentDoc, $singleParentDocFileDestination);
            }else{
                $singleParentDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
            }
           
            $insertData = array(
                'user_id' => $_SESSION['svtc_user_detais']['id'],
                'name' => $formValues['single_parent_name'],
                'relationship_type' => 'single_parent',
                'occupation' => $formValues['sigle_parent_occupation'],
                'qualification' => $formValues['single_parent_qualification'],
                'pancard_no' => $formValues['single_parent_pancard_no'],
                'aadhaar_card_no' => $formValues['single_parent_aadhar_no'],
                'mobile_no' => $formValues['single_parent_contact_no'],
                'total_annual_income' => $formValues['single_parent_income'],
                'income_doc' => $singleParentDoc
            );
            if (empty($checkForAllready)) {
                $insetId = $db->insertQuery($table, $insertData);
                if ($insetId > 0) {
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                } else {
                    $db->rollbackTransaction();
                    //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                }
            } else {
                $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                $db->commitTransaction();
                //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
            }
        }
        if (isset($formValues['relationship_partner_type']) && $formValues['relationship_partner_type'] != "") {
            $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='partner'");
            if (isset($_FILES['partner_doc']) && $_FILES['partner_doc'] != "" && $_FILES['partner_doc']['tmp_name']!="") {
                $partnerDoc = $applictionId . '-partner-doc-' . time() . '.pdf';
                $parentDocDestination = UPLOAD_DIR . 'family-details/' . $partnerDoc;
                $fileTmpPathsingleParentDoc = $_FILES['partner_doc']['tmp_name'];
                move_uploaded_file($fileTmpPathsingleParentDoc, $parentDocDestination);
            }else{
                $partnerDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
            }
            
            $insertData = array(
                'user_id' => $_SESSION['svtc_user_detais']['id'],
                'name' => $formValues['partner_name'],
                'relationship_type' => 'partner',
                'occupation' => $formValues['partner_occupation'],
                'qualification' => $formValues['partner_qualification'],
                'pancard_no' => $formValues['partner_pancard_no'],
                'aadhaar_card_no' => $formValues['partner_aadhar_no'],
                'mobile_no' => $formValues['partner_contact_no'],
                'total_annual_income' => $formValues['partner_income'],
                'income_doc' => $partnerDoc
            );
            if (empty($checkForAllready)) {
                $insetId = $db->insertQuery($table, $insertData);
                if ($insetId > 0) {
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                } else {
                    $db->rollbackTransaction();
                    //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                }
            } else {
                $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                $db->commitTransaction();
                //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
            }
        }
        $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='father'");
        if (isset($formValues['relationship_father_type']) && $formValues['relationship_father_type'] != "") {
            if (isset($_FILES['father_doc']) && $_FILES['father_doc'] != "" && $_FILES['father_doc']['tmp_name']!="") {
                $fatherDoc = $applictionId . '-father-doc-' . time() . '.pdf';
                $fatherDocDestination = UPLOAD_DIR . 'family-details/' . $fatherDoc;
                $fileTmpPathfatherDoc = $_FILES['father_doc']['tmp_name'];
                move_uploaded_file($fileTmpPathfatherDoc, $fatherDocDestination);
            } else {
                $fatherDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
            }

            $insertData = array(
                'user_id' => $_SESSION['svtc_user_detais']['id'],
                'name' => $formValues['father_name'],
                'relationship_type' => 'father',
                'occupation' => $formValues['father_occupation'],
                'qualification' => $formValues['father_qualification'],
                'pancard_no' => $formValues['father_pancard_no'],
                'aadhaar_card_no' => $formValues['father_aadhar_no'],
                'mobile_no' => $formValues['father_contact_no'],
                'total_annual_income' => $formValues['father_income'],
                'income_doc' => $fatherDoc
            );
            if (empty($checkForAllready)) {
                $insetId = $db->insertQuery($table, $insertData);
                if ($insetId > 0) {
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                } else {
                    $db->rollbackTransaction();
                    //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                }
            } else {
                $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                $db->commitTransaction();
                //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
            }
        }
        if (isset($formValues['relationship_mother_type']) && $formValues['relationship_mother_type'] != "") {
            $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='mother'");
            if (isset($_FILES['mother_doc']) && $_FILES['mother_doc'] != "" && $_FILES['mother_doc']['tmp_name']!="") {
                $motherDoc = $applictionId . '-mother-doc-' . time() . '.pdf';
                $motherDocDestination = UPLOAD_DIR . 'family-details/' . $motherDoc;
                $fileTmpPathmotherDoc = $_FILES['mother_doc']['tmp_name'];
                move_uploaded_file($fileTmpPathmotherDoc, $motherDocDestination);
            }else{
                $motherDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
            }
            
            $insertData = array(
                'user_id' => $_SESSION['svtc_user_detais']['id'],
                'name' => $formValues['mother_name'],
                'relationship_type' => 'mother',
                'occupation' => $formValues['mother_occupation'],
                'qualification' => $formValues['mother_qualification'],
                'pancard_no' => $formValues['mother_pancard_no'],
                'aadhaar_card_no' => $formValues['mother_aadhar_no'],
                'mobile_no' => $formValues['mother_contact_no'],
                'total_annual_income' => $formValues['mother_income'],
                'income_doc' => $motherDoc
            );
            if (empty($checkForAllready)) {
                $insetId = $db->insertQuery($table, $insertData);
                if ($insetId > 0) {
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                } else {
                    $db->rollbackTransaction();
                    //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                }
            } else {
                $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                $db->commitTransaction();
                //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
            }
        }
        if (isset($formValues['relationship_brother_type']) && $formValues['relationship_brother_type'] != "") {

            for ($i = 0; $i < $userBasicDetails[0]['no_of_brother']; $i++) {
                $brother_no = $i + 1;
                if (isset($formValues['brother_aadhar_no_' . $brother_no]) && $formValues['brother_aadhar_no_' . $brother_no] != "") {
                    $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='brother' and aadhaar_card_no={$formValues['brother_aadhar_no_' .$brother_no]}");
                }
                if (isset($_FILES['brother_doc_' . $brother_no]) && $_FILES['brother_doc_' . $brother_no] != "" && $_FILES['brother_doc_' . $brother_no]['tmp_name'] != "") {
                    $brotherDoc = $applictionId . '-brother-doc-' . $brother_no . time() . '.pdf';
                    $brotherDocDestination = UPLOAD_DIR . 'family-details/' . $brotherDoc;
                    $fileTmpPathbrotherDoc = $_FILES['brother_doc_' . $brother_no]['tmp_name'];
                    move_uploaded_file($fileTmpPathbrotherDoc, $brotherDocDestination);
                } else {
                    $brotherDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
                }

                $insertData = array(
                    'user_id' => $_SESSION['svtc_user_detais']['id'],
                    'name' => $formValues['brother_name_' . $brother_no],
                    'relationship_type' => 'brother',
                    'occupation' => $formValues['brother_occupation_' . $brother_no],
                    'marital_status' => $formValues['brother_maritalStatus_' . $brother_no],
                    'qualification' => $formValues['brother_qualification_' . $brother_no],
                    'pancard_no' => $formValues['brother_pancard_no_' . $brother_no],
                    'aadhaar_card_no' => $formValues['brother_aadhar_no_' . $brother_no],
                    'mobile_no' => $formValues['brother_contact_no_' . $brother_no],
                    'total_annual_income' => $formValues['brother_income_' . $brother_no],
                    'brother_no' => $brother_no,
                    'income_doc' => $brotherDoc
                );
                if (empty($checkForAllready)) {
                    $insetId = $db->insertQuery($table, $insertData);
                    if ($insetId > 0) {
                        $db->commitTransaction();
                        //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                    } else {
                        $db->rollbackTransaction();
                        //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                    }
                } else {
                    $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                }
            }
        }
        if (isset($formValues['relationship_sister_type']) && $formValues['relationship_sister_type'] != "") {

            for ($i = 0; $i < $userBasicDetails[0]['no_of_sister']; $i++) {
                $sister_no = $i + 1;
                $sisterDoc = "";
                // echo $formValues['sister_aadhar_no_' .$sister_no];die();
                $checkForAllready = [];
                if (isset($formValues['sister_aadhar_no_' . $sister_no]) && $formValues['sister_aadhar_no_' . $sister_no] != "") {
                    $checkForAllready =  $db->query("SELECT * FROM $table where user_id=$userId and relationship_type='sister' and aadhaar_card_no={$formValues['sister_aadhar_no_' .$sister_no]}");
                }
                if (isset($_FILES['sister_doc_' . $sister_no]) && $_FILES['sister_doc_' . $sister_no] != "" &&  $_FILES['sister_doc_' . $sister_no]['tmp_name'] != "") {
                    $sisterDoc = $applictionId . '-sister-doc-' . $sister_no . time() . '.pdf';
                    $sisterDocDestination = UPLOAD_DIR . 'family-details/' . $sisterDoc;
                    $fileTmpPathsisterDoc = $_FILES['sister_doc_' . $sister_no]['tmp_name'];
                    move_uploaded_file($fileTmpPathsisterDoc, $sisterDocDestination);
                } else {
                    $sisterDoc = isset($checkForAllready[0]['income_doc']) && $checkForAllready[0]['income_doc'] != "" ? $checkForAllready[0]['income_doc'] : "";
                }

                $insertData = array(
                    'user_id' => $_SESSION['svtc_user_detais']['id'],
                    'name' => $formValues['sister_name_' . $sister_no],
                    'relationship_type' => 'sister',
                    'occupation' => $formValues['sister_occupation_' . $sister_no],
                    'marital_status' => $formValues['sister_maritalStatus_' . $sister_no],
                    'qualification' => $formValues['sister_qualification_' . $sister_no],
                    'pancard_no' => $formValues['sister_pancard_no_' . $sister_no],
                    'aadhaar_card_no' => $formValues['sister_aadhar_no_' . $sister_no],
                    'mobile_no' => $formValues['sister_contact_no_' . $sister_no],
                    'total_annual_income' => $formValues['sister_income_' . $sister_no],
                    'sister_no' => $sister_no,
                    'income_doc' => $sisterDoc
                );
                if (empty($checkForAllready)) {
                    $insetId = $db->insertQuery($table, $insertData);
                    if ($insetId > 0) {
                        $db->commitTransaction();
                        //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                    } else {
                        $db->rollbackTransaction();
                        //$output = ['status'=>false,'msg'=>'Internal Server Error!'];
                    }
                } else {
                    $db->updateQuery($table, $insertData, 'id', $checkForAllready[0]['id']);
                    $db->commitTransaction();
                    //$output = ['status'=>true,'msg'=>'Successfully Saved!'];
                }
            }
        }
    }
    $output = ['status' => true, 'msg' => 'Successfully Saved!'];
    echo json_encode($output);
}

function generateUnique12DigitNumber()
{
    return str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
}
