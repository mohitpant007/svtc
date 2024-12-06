<?php
define('ALL_STATES',[
    "Andhra Pradesh",
    "Arunachal Pradesh",
    "Assam",
    "Bihar",
    "Chhattisgarh",
    "Goa",
    "Gujarat",
    "Haryana",
    "Himachal Pradesh",
    "Jharkhand",
    "Karnataka",
    "Kerala",
    "Madhya Pradesh",
    "Maharashtra",
    "Manipur",
    "Meghalaya",
    "Mizoram",
    "Nagaland",
    "Odisha",
    "Punjab",
    "Rajasthan",
    "Sikkim",
    "Tamil Nadu",
    "Telangana",
    "Tripura",
    "Uttar Pradesh",
    "Uttarakhand",
    "West Bengal",
    "Andaman and Nicobar Islands",
    "Chandigarh",
    "Dadra and Nagar Haveli and Daman and Diu",
    "Delhi",
    "Jammu and Kashmir",
    "Ladakh",
    "Lakshadweep",
    "Puducherry"
]);
function getDetail($data,$key){
    return isset($data[$key])?$data[$key]:'';
}

function getFilledDetails($data,$key){
    if(isset($data[$key]) && $data[$key]!=""){
        return $data[$key];
    }else{
        return "";
    }
}

function getdobDetails($data,$key){
    if(isset($data[$key]) && $data[$key]!=""){
        $dob = explode('-',$data[$key]);
        return $dob;
    }else{
        return "";
    }
}