
<?php
//
?>
<div class="card step" id="step2">
    <div class="card-header"><b>Step 2/4: Family Details</b></div>
    <form  id="secondForm" enctype="multipart/form-data" method="POST" action="">
    <div class="card-body">
        <div id="familyContainer">
            <?php if(isset($getApplicantDetails[0]['single_parent']) && $getApplicantDetails[0]['single_parent'] == 1){$j=1;?>
            <div class="family-item mb-3 family-member">
                <h5><?php echo ucwords(getFilledDetails($getApplicantDetails[0], 'parent_relation'));?> Details:</h5>
                <div class="row">
                <div class="col-md-3">
                       <?php
                          $single_pareent_relation = getFilledDetails($getApplicantDetails[0], 'parent_relation');
                        ?>
                        <label for="email" class="form-label">Name: <?php echo getDetail($getApplicantDetails[0], $single_pareent_relation.'_name'); ?></label>
                        
                    </div>

                    <div class="col-md-3">
                      <label for="email" class="form-label">Occupation</label>
                      <input type="hidden" name="single_parent_name" value="<?php echo getDetail($getApplicantDetails[0], $single_pareent_relation.'_name'); ?>">
                        <input type="hidden" value="1" name="relationship_single_parent_type">
                        <select name="sigle_parent_occupation" class="form-control form-select occupation-select"  id="sigle_parent_occupation">
                            <option value="">Select Occupation</option>
                            <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($fetchSingleParentDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?>  
                        </select>
                    </div>
                    <div class="col-md-3">
                       <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="single_parent_qualification" name="single_parent_qualification" >
                            <option value="">Select Qualification</option>
                            <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($fetchSingleParentDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                       
                       <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="single_parent_pancard_no" placeholder="Pancard Number" value="<?php echo getFilledDetails($fetchSingleParentDetails[0], 'pancard_no');?>" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Aadhaar Card No.</label>
                        <input type="text" class="form-control" name="single_parent_aadhar_no" placeholder="Aadhar Card Number" value="<?php echo getFilledDetails($fetchSingleParentDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="single_parent_contact_no" placeholder="Mobile No." pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number" value="<?php echo getFilledDetails($fetchSingleParentDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                    <label for="email" class="form-label">Total Annual Income</label>
                        <input type="text" class="form-control" name="single_parent_income" placeholder="Total Annual Income" value="<?php echo getFilledDetails($fetchSingleParentDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload ">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="single_parent_doc" class="form-control income-proof salary-upload" accept=".pdf,.jpg,.png" >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($fetchSingleParentDetails[0],'income_doc','family-details');?>
                    </div>
                    <!-- <div class="col-md-6 mt-2.5">
                    <button type="submit" class="btn btn-primary internal-form">Save</button>
                    </div> -->
                    
                </div>
                <hr>
            </div>
            <?php }else{ $j=2;?>
                <div class="family-item mb-3 family-member">
                <h5>Father Details:</h5>
                <div class="row">
                    <div class="col-md-3">
                        <label for="email" class="form-label">Name: <?php echo ucwords(getDetail($getApplicantDetails[0], 'father_name')); ?></label>
                        
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                         
                        <label for="email" class="form-label">Occupation</label>
                        <input type="hidden" value="<?php echo ucwords(getDetail($getApplicantDetails[0], 'father_name')); ?>" name="father_name">
                        <input type="hidden" value="father" name="relationship_father_type">
                        <select name="father_occupation" class="form-control form-select occupation-select" >
                            <option value="">Select Occupation</option>
                            <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($fetchFatherDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?>  
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="father_qualification" name="father_qualification" >
                            <option value="">Select Qualification</option>
                            <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($fetchFatherDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="father_pancard_no" placeholder="Pancard Number"  value="<?php echo getFilledDetails($fetchFatherDetails[0], 'pancard_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                       <label for="email" class="form-label">Aadhaar Card Number</label>
                        <input type="text" class="form-control" name="father_aadhar_no" placeholder="Aadhaar Card Number" pattern="\d{12}" maxlength="12" value="<?php echo getFilledDetails($fetchFatherDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                    <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="father_contact_no" placeholder="Mobile No."  pattern="^[6-9]\d{9}$" 
                        title="Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9." value="<?php echo getFilledDetails($fetchFatherDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Annual Income</label>
                        <input type="text" class="form-control" name="father_income" placeholder="Annual income" value="<?php echo getFilledDetails($fetchFatherDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="father_doc" class="form-control income-proof" accept=".pdf," >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($fetchFatherDetails[0],'income_doc','family-details');?>
                        <div class="error"></div>
                    </div>
                    

                </div>
                <hr>
            </div>
            <div class="family-item mb-3 family-member">
                <h5>Mother Details:</h5>
                <div class="row">
                    <div class="col-md-3">
                       <label for="email" class="form-label">Name: <?php echo ucwords(getDetail($getApplicantDetails[0], 'mother_name')); ?></label>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Occupation</label>
                        <input type="hidden" value="<?php echo ucwords(getDetail($getApplicantDetails[0], 'mother_name')); ?>" name="mother_name">
                        <input type="hidden" value="mother" name="relationship_mother_type">
                        <select name="mother_occupation" class="form-control form-select occupation-select" >
                            <option value="">Select Occupation</option>
                            <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($fetchMotherDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?>  
                        </select>
                    </div>
                    <div class="col-md-3">
                       <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="mother_qualification" name="mother_qualification" >
                            <option value="">Select Qualification</option>
                            <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($fetchMotherDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="mother_pancard_no" placeholder="Pancard Number" value="<?php echo getFilledDetails($fetchMotherDetails[0], 'pancard_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Aadhar Card No.</label>
                        <input type="text" class="form-control" name="mother_aadhar_no" placeholder="Aadhar Card Number" pattern="\d{12}" maxlength="12" value="<?php echo getFilledDetails($fetchMotherDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="mother_contact_no" placeholder="Mobile No." value="<?php echo getFilledDetails($fetchMotherDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                    <label for="email" class="form-label">Annual Income</label>
                        <input type="text" class="form-control" name="mother_income" placeholder="Annual Income" value="<?php echo getFilledDetails($fetchMotherDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="mother_doc" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($fetchMotherDetails[0],'income_doc','family-details');?>
                        <div class="error"></div>
                    </div>
                    

                </div>
                <hr>
            </div>
            <?php } ?>  
            <div class="family-item mb-3 family-member">
                <h5><?php 
                if(getDetail($getApplicantDetails[0], 'gender') != 'Other'){
                  echo getDetail($getApplicantDetails[0], 'gender') == 'Male'?'Spouse Details :':'Spouse Details :';
                }else{
                  echo 'Spouse Details :';
                }
                
                ?></h5>
                <div class="row">
                    <div class="col-md-3">
                       <label for="email" class="form-label">Name </label>
                       <input type="text" class="form-control" name="partner_name" placeholder="Name" value="<?php echo getFilledDetails($fetchPartnerDetails[0], 'name');?>">
                    </div>
                    <div class="col-md-3">
                    <input type="hidden" value="partner" name="relationship_partner_type">
                        <label for="email" class="form-label">Occupation</label>
                        <select name="partner_occupation" class="form-control form-select occupation-select" >
                            <option value="">Select Occupation</option>
                            <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($fetchPartnerDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                       <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="partner_qualification" name="partner_qualification" >
                        <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($fetchPartnerDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="partner_pancard_no" placeholder="Pancard Number" value="<?php echo getFilledDetails($fetchPartnerDetails[0], 'pancard_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Aadhar Card No.</label>
                        <input type="text" class="form-control" name="partner_aadhar_no" placeholder="Aadhar Card Number" pattern="\d{12}" maxlength="12" value="<?php echo getFilledDetails($fetchPartnerDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="partner_contact_no" placeholder="Mobile No."  value="<?php echo getFilledDetails($fetchPartnerDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                    <label for="email" class="form-label">Annual Income</label>
                        <input type="text" class="form-control" name="partner_income" placeholder="Annual Income" value="<?php echo getFilledDetails($fetchPartnerDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="partner_doc" class="form-control income-proof" accept=".pdf" >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($fetchPartnerDetails[0],'income_doc','family-details');?>
                        <div class="error"></div>
                    </div>
                    

                </div>
                <hr>
            </div>
            <?php 
            if($getApplicantDetails[0]['no_of_brother'] > 0){
            for($i=0;$i<$getApplicantDetails[0]['no_of_brother'];$i++){
                $k=$i+1;
                $getBrotherDetails = $db->query("SELECT * FROM $table_family where user_id=$applicationId and relationship_type ='brother' and brother_no = $k");
                if(empty($getBrotherDetails)){
                    $getBrotherDetails[0]=[];
                  }
                ?> 
            <div class="family-item mb-3 family-member">
                <h5>Brother <?php echo $i+1;?> Details:</h5>
                <div class="row">
                    <div class="col-md-3">
                        <label for="email" class="form-label">Name</label>
                        <input type="text" class="form-control" name="brother_name_<?php echo $k;?>" placeholder="Name" value="<?php echo getFilledDetails($getBrotherDetails[0], 'name');?>">
                    </div>
                    <div class="col-md-3">
                    <input type="hidden" value="brother" name="relationship_brother_type">
                        <label for="email" class="form-label">Occupation</label>
                        <select name="brother_occupation_<?php echo $k;?>" class="form-control form-select occupation-select" id="brother_occupation_<?php echo $k;?>" >
                           <option value="">Select Occupation</option>
                           <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($getBrotherDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?>  
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="brother_qualification_<?php echo $k;?>" name="brother_qualification_<?php echo $k;?>" >
                            <option value="">Select Qualification</option>
                            <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($getBrotherDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Marital Status</label>
                        <select class="form-select" id="maritalStatus" name="brother_maritalStatus_<?php echo $k;?>">
                            <option value="" selected>Select Marital Status</option>
                            <?php foreach(ALL_MARITAL_STATUS as $marital_status):?>
                                <option value="<?php echo $marital_status;?>"  <?php echo getFilledDetails($getBrotherDetails[0], 'marital_status') == $marital_status ? 'selected' : ''; ?>><?php echo $marital_status;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="brother_pancard_no_<?php echo $k;?>" placeholder="Pancard Number" value="<?php echo getFilledDetails($getBrotherDetails[0], 'pancard_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Aadhaar No.</label>
                        <input type="text" class="form-control" name="brother_aadhar_no_<?php echo $k;?>" placeholder="Aadhar Card Number" value="<?php echo getFilledDetails($getBrotherDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                       <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="brother_contact_no_<?php echo $k;?>" placeholder="Mobile No." value="<?php echo getFilledDetails($getBrotherDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Total Annual Income</label>
                        <input type="text" class="form-control" name="brother_income_<?php echo $k;?>" placeholder="Total income" value="<?php echo getFilledDetails($getBrotherDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="brother_doc_<?php echo $k;?>" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($getBrotherDetails[0],'income_doc','family-details');?>
                        <div class="error"></div>
                    </div>
                    

                </div>
                <hr>
            </div>
            <?php }} else { $k = $j;} ?>
            <?php 
            if($getApplicantDetails[0]['no_of_sister'] > 0){
            for($i=0;$i<$getApplicantDetails[0]['no_of_sister'];$i++){$z =$i+1; 
                $getSisterDetails = $db->query("SELECT * FROM $table_family where user_id=$applicationId and relationship_type ='sister' and sister_no = $z");
                if(empty($getSisterDetails)){
                    $getSisterDetails[0]=[];
                  }
            ?> 
            <div class="family-item mb-3 family-member">
                <h5>Sister <?php echo $i+1;?> Details:</h5>
                <div class="row">
                    <div class="col-md-3">
                        <label for="email" class="form-label">Name</label>
                        <input type="text" class="form-control" name="sister_name_<?php echo $z;?>" placeholder="Name" value="<?php echo getFilledDetails($getSisterDetails[0], 'name');?>">
                    </div>
                    <div class="col-md-3">
                    <input type="hidden" value="sister" name="relationship_sister_type">
                        <label for="email" class="form-label">Occupation</label>
                        <select name="sister_occupation_<?php echo $z;?>" class="form-control form-select occupation-select" id="sister_occupation_<?php echo $z;?>" >
                           <option value="">Select Occupation</option>
                           <?php foreach(ALL_OCCUPATION as $occupation):?>
                                <option value="<?php echo $occupation;?>" <?php echo getFilledDetails($getSisterDetails[0], 'occupation') == $occupation ? 'selected' : ''; ?>><?php echo $occupation;?></option>
                            <?php endforeach;?> 
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Qualification</label>
                        <select class="form-select education-level-family" id="sister_qualification_<?php echo $i;?>" name="sister_qualification_<?php echo $z;?>" >
                            <option value="">Select Qualification</option>
                            <?php foreach(ALL_QUALIFICATION as $qualification):?>
                                <option value="<?php echo $qualification;?>"  <?php echo getFilledDetails($getSisterDetails[0], 'qualification') == $qualification ? 'selected' : ''; ?>><?php echo $qualification;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Marital Status</label>
                        <select class="form-select" id="maritalStatus" name="sister_maritalStatus_<?php echo $z;?>">
                            <option value="" selected>Select Marital Status</option>
                            <?php foreach(ALL_MARITAL_STATUS as $marital_status):?>
                                <option value="<?php echo $marital_status;?>"  <?php echo getFilledDetails($getSisterDetails[0], 'marital_status') == $marital_status ? 'selected' : ''; ?>><?php echo $marital_status;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Pancard No.</label>
                        <input type="text" class="form-control" name="sister_pancard_no_<?php echo $z;?>" placeholder="Pancard Number" value="<?php echo getFilledDetails($getSisterDetails[0], 'pancard_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Aadhaar Card No.</label>
                        <input type="text" class="form-control" name="sister_aadhar_no_<?php echo $z;?>" placeholder="Aadhar Card Number" value="<?php echo getFilledDetails($getSisterDetails[0], 'aadhaar_card_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Mobile No.</label>
                        <input type="text" class="form-control" name="sister_contact_no_<?php echo $z;?>" placeholder="Mobile No." value="<?php echo getFilledDetails($getSisterDetails[0], 'mobile_no');?>">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="email" class="form-label">Total Annual Income</label>
                        <input type="text" class="form-control" name="sister_income_<?php echo $z;?>" placeholder="Total Annual Income" value="<?php echo getFilledDetails($getSisterDetails[0], 'total_annual_income');?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 6 Month bank statement</label>
                        <input type="file" name="sister_doc_<?php echo $z;?>" class="form-control income-proof" accept=".pdf" >
                        <?php echo upload_validation_msg();?><br>
                        <?php echo open_uploaded_file($getSisterDetails[0],'income_doc','family-details');?>
                        <div class="error"></div>
                    </div>
                    

                </div>
                <hr>
            </div>
            <?php }} ?>
        </div>
       
        <a href="scholarship-apply-form-step-1"><button type="button" class="btn btn-secondary prev">Previous</button></a>
        <button type="submit" class="btn btn-primary second-form">Next</button>
    </form>
    </div>
</div>

<!-- Step 2: Education Details -->


<!-- Step 3: Family Details -->


<!-- Step 4: Financial Details & Upload -->
<div class="card step" id="step4" style="display: none;">
    <div class="card-header">Step 4: Financial Details & Upload</div>
    <div class="card-body">
        <div class="mb-3">
            <label for="family_income" class="form-label">Family Income</label>
            <input type="number" class="form-control" name="family_income" >
        </div>
        <div id="fileUploadContainer">
            <div class="mb-3">
                <label for="file1" class="form-label">Upload File</label>
                <input type="file" class="form-control" id="file1" name="files[]">
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="addFileSection">Add More Files</button>
        <button type="button" class="btn btn-secondary prev">Previous</button>
        <button type="button" class="btn btn-primary next">Next</button>

    </div>
</div>

<div class="card step" id="step5" style="display: none;">
    <div class="card-header">Step 5: Education Documents</div>
    <div class="card-body">
        <div id="fileEducationUploadContainer">
            <div class="mb-3">
                <label for="file1" class="form-label">Upload File</label>
                <input type="file" class="form-control" id="file1" name="files[]">
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="addEducationFileSection">Add More Files</button>
        <button type="button" class="btn btn-secondary prev">Previous</button>
        <button type="submit" class="btn btn-success second-form">Submit</button>
    </div>
</div>

