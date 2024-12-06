
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
                <h5>Family Member #1</h5>
                <div class="row">
                    <div class="col-md-3">
                        <?php
                        $single_pareent_relation = getFilledDetails($getApplicantDetails[0], 'parent_relation');
                        ?>
                        <input type="text" class="form-control" name="family_name" placeholder="Name" value="<?php echo getDetail($getApplicantDetails[0], $single_pareent_relation.'_name'); ?>"  disabled="disabled">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="relation"  disabled>
                            <option value="" selected >Select Relationship</option>
                            <option value="father" <?php echo getFilledDetails($getApplicantDetails[0], 'parent_relation') == 'father' ? 'selected' : ''; ?>>Father</option>
                            <option value="mother" <?php echo getFilledDetails($getApplicantDetails[0], 'parent_relation') == 'mother' ? 'selected' : ''; ?>>Mother</option>
                           
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" > -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                        <select name="sigle_parent_occupation" class="form-control form-select occupation-select" required id="sigle_parent_occupation">
                            <option value="">Select Occupation</option>
                            <option value="Government Servant">Government Servant</option>
                            <option value="Private Employee">Private Employee</option>
                            <option value="Businessman/Businesswoman">Businessman/Businesswoman</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Farmer/Agriculturist">Farmer/Agriculturist</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="single_parent_qualification" required="true">
                            <option value="">-- Select Qualification --</option>
                            <option value="Elementary education">Elementary education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="ITI">ITI</option>
                            <option value="Diploma/Certificate program">Diploma/Certificate program</option>
                            <option value="Higher Secondary Education">Higher Secondary Education</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post graduate">Post graduate</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="single_parent_pancard_no" placeholder="Pancard Number" required="true">
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="single_parent_aadhar_no" placeholder="Aadhar Card Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="single_parent_contact_no" placeholder="Mobile No." pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="single_parent_income[]" placeholder="Total income" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 1 year bank statement</label>
                        <input type="file" name="single_parent_doc[]" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <div class="error"></div>
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Aadhar Card</label>
                        <input type="file" name="single_parent_aadhar[]" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Pancard Card</label>
                        <input type="file" name="single_parent_pacard" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        
                    </div>
                    

                </div>
                <hr>
            </div>
            <?php }else{ $j=2;?>
                <div class="family-item mb-3 family-member">
                <h5>Family Member #1</h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="father_name" placeholder="Name" value="<?php echo getDetail($getApplicantDetails[0], 'father_name'); ?>"  disabled="disabled">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month"  disabled>
                            <option value="father" >Father</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" > -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                        <select name="father_occupation" class="form-control form-select occupation-select" >
                            <option value="">Select Occupation</option>
                            <option value="Government Servant">Government Servant</option>
                            <option value="Private Employee">Private Employee</option>
                            <option value="Businessman/Businesswoman">Businessman/Businesswoman</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Farmer/Agriculturist">Farmer/Agriculturist</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="father_qualification" required>
                            <option value="">-- Select Qualification --</option>
                            <option value="Elementary education">Elementary education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="ITI">ITI</option>
                            <option value="Diploma/Certificate program">Diploma/Certificate program</option>
                            <option value="Higher Secondary Education">Higher Secondary Education</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post graduate">Post graduate</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="father_pancard_no" placeholder="Pancard Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="father_aadhar_no" placeholder="Aadhar Card Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="father_contact_no" placeholder="Mobile No." >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="father_income" placeholder="Annual income" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 1 year bank statement</label>
                        <input type="file" name="father_doc" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <div class="error"></div>
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Aadhar Card</label>
                        <input type="file" name="father_aadhar" class="form-control" accept=".pdf,.jpg,.png" >
                       
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Pancard Card</label>
                        <input type="file" name="father_panacard" class="form-control" accept=".pdf,.jpg,.png" >
                       
                    </div>

                </div>
                <hr>
            </div>
            <div class="family-item mb-3 family-member">
                <h5>Family Member #2</h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="mother_name" placeholder="Name" value="<?php echo getDetail($getApplicantDetails[0], 'mother_name'); ?>"  disabled="disabled">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month"  disabled>
                            <option value="mother" >Mother</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" > -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                        <select name="mother_occupation" class="form-control form-select occupation-select" >
                            <option value="">Select Occupation</option>
                            <option value="Government Servant">Government Servant</option>
                            <option value="Private Employee">Private Employee</option>
                            <option value="Businessman/Businesswoman">Businessman/Businesswoman</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Farmer/Agriculturist">Farmer/Agriculturist</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="mother_qualification" required>
                            <option value="">-- Select Qualification --</option>
                            <option value="Elementary education">Elementary education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="ITI">ITI</option>
                            <option value="Diploma/Certificate program">Diploma/Certificate program</option>
                            <option value="Higher Secondary Education">Higher Secondary Education</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post graduate">Post graduate</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="mother_pancard_no" placeholder="Pancard Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="mother_aadhar_no" placeholder="Aadhar Card Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="mother_contact_no" placeholder="Mobile No." >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="mother_income" placeholder="Annal income" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 1 year bank statement</label>
                        <input type="file" name="mother_doc" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <div class="error"></div>
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Aadhar Card</label>
                        <input type="file" name="mother_aadhar" class="form-control" accept=".pdf,.jpg,.png" >
                        
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Pancard Card</label>
                        <input type="file" name="mother_aadhar" class="form-control" accept=".pdf,.jpg,.png" >
                        
                    </div>

                </div>
                <hr>
            </div>
            <?php } ?>  
            <?php 
            if($getApplicantDetails[0]['no_of_brother'] > 0){
            for($i=0;$i<$getApplicantDetails[0]['no_of_brother'];$i++){
                $k=$j+1+$i;
                ?> 
            <div class="family-item mb-3 family-member">
                <h5>Family Member #<?php echo $j+1+$i;?></h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][name]" placeholder="Name" >
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month" disabled="disabled" >
                           
                            <option value="brother">Brother</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" > -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                        <select name="brother_occupation[]" class="form-control form-select occupation-select" id="brother_occupation_<?php echo $k;?>" required>
                           <option value="">Select Occupation</option>
                            <option value="Government Servant">Government Servant</option>
                            <option value="Private Employee">Private Employee</option>
                            <option value="Businessman/Businesswoman">Businessman/Businesswoman</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Farmer/Agriculturist">Farmer/Agriculturist</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="brother_qualification[]" required>
                            <option value="">-- Select Qualification --</option>
                            <option value="Elementary education">Elementary education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="ITI">ITI</option>
                            <option value="Diploma/Certificate program">Diploma/Certificate program</option>
                            <option value="Higher Secondary Education">Higher Secondary Education</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post graduate">Post graduate</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select class="form-select" id="maritalStatus" name="brother_maritalStatus[]">
                            <option value="" selected>--Select Marital Status--</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="brother_pancard_no[]" placeholder="Pancard Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="brother_aadhar_no[]" placeholder="Aadhar Card Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="brother_contact_no[]" placeholder="Mobile No." >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="brother_income[]" placeholder="Total income" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 1 year bank statement</label>
                        <input type="file" name="brother_doc[]" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <div class="error"></div>
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Aadhar Card</label>
                        <input type="file" name="brother_aadhar[]" class="form-control" accept=".pdf,.jpg,.png" >
                       
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Pancard Card</label>
                        <input type="file" name="brother_pacard[]" class="form-control" accept=".pdf,.jpg,.png" >
                       
                    </div>

                </div>
                <hr>
            </div>
            <?php }} else { $k = $j;} ?>
            <?php 
            if($getApplicantDetails[0]['no_of_sister'] > 0){
            for($i=0;$i<$getApplicantDetails[0]['no_of_sister'];$i++){$z =$k+$i+1; ?> 
            <div class="family-item mb-3 family-member">
                <h5>Family Member #<?php echo $k+$i+1;?></h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][name]" placeholder="Name" >
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month" disabled="disabled" >
                           
                            <option value="sister">Sister</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" > -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" > -->
                        <select name="sister_occupation_<?php echo $i;?>" class="form-control form-select occupation-select" id="sister_occupation_<?php echo $i;?>" required>
                           <option value="">Select Occupation</option>
                            <option value="Government Servant">Government Servant</option>
                            <option value="Private Employee">Private Employee</option>
                            <option value="Businessman/Businesswoman">Businessman/Businesswoman</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Farmer/Agriculturist">Farmer/Agriculturist</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Housewife/Homemaker">Housewife/Homemaker</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Retired">Retired</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="sister_qualification[]" required>
                            <option value="">-- Select Qualification --</option>
                            <option value="Elementary education">Elementary education</option>
                            <option value="Secondary Education">Secondary Education</option>
                            <option value="ITI">ITI</option>
                            <option value="Diploma/Certificate program">Diploma/Certificate program</option>
                            <option value="Higher Secondary Education">Higher Secondary Education</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post graduate">Post graduate</option>
                            <option value="Doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <select class="form-select" id="maritalStatus" name="sister_maritalStatus[]">
                            <option value="" selected>--Select Marital Status--</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                            <option value="separated">Separated</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="sister_pancard_no[]" placeholder="Pancard Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="sister_aadhar_no[]" placeholder="Aadhar Card Number" >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="sister_contact_no[]" placeholder="Mobile No." >
                    </div>
                    <div class="col-md-4 mt-2">
                        <input type="text" class="form-control" name="sister_income[]" placeholder="Total income" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="full_name" class="form-label important-upload">* Upload salary slip / Bank statement - last 1 year bank statement</label>
                        <input type="file" name="sister_doc[]" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                        <div class="error"></div>
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Aadhar Card</label>
                        <input type="file" name="sister_aadhar[]" class="form-control" accept=".pdf,.jpg,.png" >
                       
                    </div>
                    <div class="col-md-6 mt-2">
                    <label for="full_name" class="form-label important-upload">* Upload Pancard Card</label>
                        <input type="file" name="sister_pancard[]" class="form-control" accept=".pdf,.jpg,.png" >
                       
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
<div class="card step" id="step3" style="display: none;">
    <div class="card-header">Step 3: Education Details</div>
    <div class="card-body">
        <div id="educationContainer">
            <div class="education-item mb-3">
                <h5>Education #1</h5>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-select education-level-family" id="qualification1" name="qualification[]" >
                            <option value="">-- Select Qualification --</option>
                            <option value="10th">10th</option>
                            <option value="12th">12th</option>
                            <option value="Engineering">Engineering</option>
                            <option value="diploma">Diploma</option>
                            <option value="Graduation">Graduation</option>
                            <option value="postgraduation">Post-Graduation</option>
                        </select>
                    </div>
                    <div class="col-md-3 graduation-fields" style="display:none;">
                        <select name="semester[]" class="form-select">
                            <option value="">Select Semester</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </select>
                        <select name="branch[]" class="form-select mt-2">
                            <option value="">Select Branch</option>
                            <option value="BTech">BTech</option>
                            <option value="BE">BE</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="education[0][institution]" placeholder="Institution" >
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" name="education[0][year]" placeholder="Year of Passing" >
                    </div>
                    <div class="col-md-2">
                        <input type="number" step="0.01" class="form-control" name="education[0][percentage]" placeholder="Percentage/CGPA" >
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="file" name="education_certificate[]" class="form-control income-proof" accept=".pdf,.jpg,.png" >
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="addEducation">Add More Education</button>
        <button type="button" class="btn btn-secondary prev">Previous</button>
        <button type="button" class="btn btn-primary next">Next</button>
    </div>
</div>

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

