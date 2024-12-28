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
define('ALL_OCCUPATION',
   ['Government Servant',
    'Private Employee',
    'Businessman/Businesswoman',
    'IT Professional',
    'Farmer/Agriculturist',
    'Housewife/Homemaker',
    'Researcher',
    'Unemployed',
    'Retired'
]);
define('ALL_QUALIFICATION',
   ['Elementary education',
    'Secondary Education',
    'Businessman/Businesswoman',
    'ITI',
    'Higher Secondary Education',
    'Graduate',
    'Post graduate',
    'Doctorate'
]);
define('ALL_MARITAL_STATUS',[
  'single',
  'married',
  'divorced',
  'separated'
]);
define('ALL_COURSE',[
['11th'=>'11th/ICSE/CBSE','12th'=>'12th/ICSE/CBSE','PUC'=>'PUC/ICSE/CBSE','Diploma Courses'=>'Diploma Courses','Bcom'=>'Bcom','Bsc'=>'Bsc','BA'=>'BA','BBM'=>'BBM','CPT'=>'CPT','B Pharma'=>'B Pharma','Mcom'=>'Mcom','Msc'=>'Msc','MA'=>'MA','MBA'=>'MBA','B Ed'=>'B Ed','M Pharma'=>'M Pharma','Engineering'=>'Engineering','MBBS'=>'MBBS','MS'=>'MS','MD'=>'MD','Phd'=>'Phd','ICWA'=>'ICWA','ACS'=>'ACS','CA (IPCC)'=>'CA (IPCC)','IAS'=>'IAS','LLB'=>'LLB','IIM'=>'IIM']
]);
function getDetail($data,$key){
    return isset($data[$key])?$data[$key]:'';
}

function getFilledDetails($data,$key){
    if(isset($data[$key]) && $data[$key]!=""){
        return $data[$key] == 0?'':$data[$key];
    }else{
        return "";
    }
}

function getdobDetails($data,$key){
    if(isset($data[$key]) && $data[$key]!=""){
        
        return $data[$key];
    }else{
        return date('Y-m-d');
    }
}
function open_uploaded_file($data,$key,$upload_folder){
    if(isset($data[$key]) && $data[$key]!=""){

        $path = UPLOAD_BASE_URL.$upload_folder.'/'.$data[$key];
        return "<br><a  href='$path' target='_blank'>Click to View</a>";
    }else{
        return "";
    }
}

function upload_validation_msg(){
    return "<span class='error'>(Upload only PNG/JPG/PNG/PDF format and size is less then 1MB)</span>";
}