<form id="studentForm" enctype="multipart/form-data" method="POST" novalidate="novalidate">
    <!-- Step 1: Basic Information -->
    <div class="card step" id="step1">
        <div class="card-header"><b>Step 1/4: Basic Information</b></div>
        <div class="card-body">
           
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name <span class="required">*</span></label>
                <input type="text" class="form-control" name="full_name" value="<?php echo getDetail($_SESSION['svtc_user_detais'], 'name'); ?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="required">*</span></label>
                <input type="email" class="form-control" name="email" value="<?php echo getDetail($_SESSION['svtc_user_detais'], 'email'); ?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Mobile No. <span class="required">*</span></label>
                <input type="text" class="form-control" name="phone" value="<?php echo getDetail($_SESSION['svtc_user_detais'], 'mobile'); ?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth <span class="required">*</span></label>
                <div class="row">
                    <!-- <div class="col-md-4">

                        <select class="form-select" id="dob-day" name="dob-day" required>

                            <option value="" selected disabled>Day</option>
                          
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                // $isSelected = ($i === getdobDetails($getApplicantDetails[0], 'dob')[2]) ? 'selected' : '';
                               if(!empty($getApplicantDetails[0])){?>
                                <option value="<?php echo $i; ?>" <?php echo $i == getdobDetails($getApplicantDetails[0], 'dob')[2] ? 'selected' : ''; ?>><?php echo $i; ?></option>
                                <?php } else { ?>
                                    <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
                                <?php } ?>
                            <?php }
                            ?>

                        </select>
                    </div> -->
                    <div class="col-md-12">
                      <div class="row"> 
                      <div class="input-group col-md-6 calender-width">
                      <input type="text" value="<?php echo date('Y-m-d');?>" id="datepicker" class="form-control" aria-label="Date Input">
                     <span class="input-group-text"><i class="fa fa-calendar" id="open-calendar"></i></span>
                   </div>
                     <!-- <div class="col-md-6"> <input type="text" id="datepicker" class="form-control" readonly></div>  
                     <div class="col-md-6"><i class="fa fa-calendar calender-icon" aria-hidden="true" id="open-calendar"></i></div> 
                     </div>    -->
                    
                        <!-- <label for="dob-month" class="form-label">Month</label> -->
                        <!-- <select class="form-select" id="dob-month" name="dob-month" required>
                            <?php if(!empty($getApplicantDetails[0])){?>
                            <option value="" selected disabled>Month</option>
                            <option value="1" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 1 ? 'selected' : ''; ?>>January</option>
                            <option value="2" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 2 ? 'selected' : ''; ?>>February</option>
                            <option value="3" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 3 ? 'selected' : ''; ?>>March</option>
                            <option value="4" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 4 ? 'selected' : ''; ?>>April</option>
                            <option value="5" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 5 ? 'selected' : ''; ?>>May</option>
                            <option value="6" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 6 ? 'selected' : ''; ?>>June</option>
                            <option value="7" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 7 ? 'selected' : ''; ?>>July</option>
                            <option value="8" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 8 ? 'selected' : ''; ?>>August</option>
                            <option value="9" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 9 ? 'selected' : ''; ?>>September</option>
                            <option value="10" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 10 ? 'selected' : ''; ?>>October</option>
                            <option value="11" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 11 ? 'selected' : ''; ?>>November</option>
                            <option value="12" <?php echo   getdobDetails($getApplicantDetails[0], 'dob')[1] == 12 ? 'selected' : ''; ?>>December</option>
                            <?php } else {?>
                                <option value="" selected disabled>Month</option>
                            <option value="1" >January</option>
                            <option value="2" >February</option>
                            <option value="3" >March</option>
                            <option value="4" >April</option>
                            <option value="5" >May</option>
                            <option value="6" >June</option>
                            <option value="7" >July</option>
                            <option value="8" >August</option>
                            <option value="9" >September</option>
                            <option value="10" >October</option>
                            <option value="11" >November</option>
                            <option value="12">December</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                 <label for="dob-year" class="form-label">Year</label> 
                        <select class="form-select" id="dob-year" name="dob-year" required>
                            <option value="" selected disabled>Year</option>
                            Loop to generate options 
                            <?php
                            if(!empty($getApplicantDetails[0])){
                            for ($i = date('Y'); $i >= 1900; $i--) { ?>
                                <option value="<?php echo $i; ?>" <?php echo $i == getdobDetails($getApplicantDetails[0], 'dob')[0] ? 'selected' : ''; ?>><?php echo $i; ?></option>
                            <?php }} else {
                                for ($i = date('Y'); $i >= 1900; $i--) { ?>
                                    <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
                                <?php }}?>
                            </script>
                        </select>
                    </div> -->
                </div>
                <!-- <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" required> -->
            </div>
            <div class="mb-2 mt-2">
                <label for="gender" class="form-label">Gender <span class="required">*</span></label>
                <select class="form-select" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male" <?php echo getFilledDetails($getApplicantDetails[0], 'gender') == 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo getFilledDetails($getApplicantDetails[0], 'gender') == 'Female' ? 'selected' : ''; ?>>Female</option>
                    <option value="Other" <?php echo getFilledDetails($getApplicantDetails[0], 'gender') == 'Other' ? 'selected' : ''; ?>>Don't want to disclose</option>
                </select>
            </div>
            <div class="mb-2 mt-2">
                <label for="gender" class="form-label">Select Marital Status <span class="required">*</span></label>
                <select class="form-select" name="gender" required>
                    <option value="">Select</option>
                    <option value="married" >Married</option>
                    <option value="unmarried" >Unmarried</option>
                   
                </select>
            </div>
            <div class="mb-2 mt-2">
                <label for="gender" class="form-label">Country / State <span class="required">*</span></label>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" name="gender" required>
                            <option value="">Select Country</option>
                            <option value="India" >India</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="gender" required>
                            <option value="">Select State</option>
                            <?php foreach(ALL_STATES as $state):?>
                                <option value="<?php echo $state;?>"><?php echo $state;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Current Address <span class="required">*</span></label>
                <textarea name="current_address" id="current_address" class="form-control" required></textarea>
            </div>
            
            <div class="mb-3 mt-3">
            <div class="mb-2 mt-3 pull-right">
                <input type="checkbox" id="same-current-address" name="same-current-address" value="same-current-address">
                <label for="same-current-address"> Same as Current Address?</label><br>
            </div>
                <label for="email" class="form-label">Permanent Address</label>
                <textarea name="permanent_address" id="permanent_address" class="form-control" required></textarea>
            </div>
            <div class="mb-2 mt-5">
               <div class="card-header">Pancard Details </div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="email" class="form-label">Pancard Number</label>
                    <input type="text" class="form-control" name="pancard_no" value=""  required>
                    </div>
                    <div class="col-md-6">
                    <label for="email" class="form-label">Upload Pancard</label>
                     <input type="file" class="form-control" name="pancard_image" value=""  required>
                    </div>
                </div>
            </div>
            <div class="mb-2 mt-5">
               <div class="card-header">Aadhaar Card Details <span class="required">*</span></div>
                <div class="row">
                    <div class="col-md-6">
                    <label for="email" class="form-label">Aadhaar Card Number <span class="required">*</span></label>
                    <input type="text" pattern="\d{12}" maxlength="12" title="Aadhaar number must be a 12-digit numeric value." class="form-control" name="adhaar_number" value="<?php echo getDetail($getApplicantDetails[0], 'aadhar_no'); ?>" required>
                <input type="hidden" name="id" value="<?php echo getDetail($_SESSION['svtc_user_detais'], 'id'); ?>">
                    </div>
                    <div class="col-md-6">
                    <label for="email" class="form-label">Upload Aadhaar Card<span class="required">*</span></label>
                     <input type="file" class="form-control" name="pancard_image" value=""  required>
                    </div>
                </div>
            </div>
            <div class="mb-2 mt-5">
            <div class="card-header">Family Details </div>
                <input type="checkbox" id="single-parent" name="parent_type" value="single_parent" <?php echo getFilledDetails($getApplicantDetails[0], 'single_parent') == 1 ? 'checked' : ''; ?>>
                <label for="single-parent"> Single Parent</label><br>
            </div>

            <div class="mb-2 mt-3" id="father_details">
                <label for="full_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="father_name" name="father_name" value="<?php echo getDetail($getApplicantDetails[0], 'father_name'); ?>" required>
            </div>
            <div class="mb-2 mt-3" id="mother_details">
                <label for="full_name" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo getDetail($getApplicantDetails[0], 'mother_name'); ?>" required>
            </div>
            <div class="mb-2 mt-3" id="sigle_parent_details" style="display: none;">
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" id="parent_relation" name="parent_relation" required>
                            <option value="" selected disabled>Select Relationship</option>
                            <option value="father" <?php echo getFilledDetails($getApplicantDetails[0], 'parent_relation') == 'father' ? 'selected' : ''; ?>>Father</option>
                            <option value="mother" <?php echo getFilledDetails($getApplicantDetails[0], 'parent_relation') == 'mother' ? 'selected' : ''; ?>>Mother</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <?php
                        $single_pareent_relation = getFilledDetails($getApplicantDetails[0], 'parent_relation');
                        ?>
                        <input type="text" class="form-control" id="single_parent_name" name="single_parent_name" placeholder="Enter the Name" value="<?php echo $single_pareent_relation!=""?getDetail($getApplicantDetails[0], $single_pareent_relation.'_name'):''; ?>" required>
                    </div>
                </div>
            </div>
            <div class="mb-2 mt-5">
                <div class="card-header">Siblings Details <span class="required">*</span></div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="full_name" class="form-label">No. of Brothers</label>
                        <input type="text" class="form-control" id="no_of_brother" name="no_of_brother" value="<?php echo getDetail($getApplicantDetails[0], 'no_of_brother'); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="full_name" class="form-label">No. of Sisters</label>
                        <input type="text" class="form-control" id="no_of_sister" name="no_of_sister" value="<?php echo getDetail($getApplicantDetails[0], 'no_of_sister'); ?>" required>
                    </div>
                </div>
            </div>
   
            <button type="submit" class="btn btn-primary first-form" style="width:10%">Next</button>
</form>
</div>
</div>

<div class="card step" id="step2" style="display: none;">
    <div class="card-header">Step 2: Family Details</div>
    <div class="card-body">
        <div id="familyContainer">
            <div class="family-item mb-3 family-member">
                <h5>Family Member #1</h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][name]" placeholder="Name" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month" required>
                            <option value="" selected disabled>Select Relationship</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="husband">Husband</option>
                            <option value="wife">Wife</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" required> -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" required> -->
                        <select name="occupation[]" class="form-control occupation-select" required>
                            <option value="">Select Occupation</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Retire">Retire</option>
                            <option value="Not Employed">Not Employed</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][contact]" placeholder="Contact Number" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="file" name="family[0][income_proof]" class="form-control income-proof" accept=".pdf,.jpg,.png" required>
                        <div class="error"></div>
                    </div>

                </div>
            </div>
            <div class="family-item mb-3 family-member">
                <h5>Family Member #2</h5>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][name]" placeholder="Name" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" id="dob-month" name="dob-month" required>
                            <option value="" selected disabled>Select Relationship</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="son">Son</option>
                            <option value="daughter">Daughter</option>
                            <option value="husband">Husband</option>
                            <option value="wife">Wife</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" required> -->
                    </div>

                    <div class="col-md-3">
                        <!-- <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" required> -->
                        <select name="occupation[]" class="form-control occupation-select" required>
                            <option value="">Select Occupation</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Retire">Retire</option>
                            <option value="Not Employed">Not Employed</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="family[0][contact]" placeholder="Contact Number" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="file" name="family[0][income_proof]" class="form-control income-proof" accept=".pdf,.jpg,.png" required>
                        <div class="error"></div>
                    </div>

                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="addFamily">Add More Family</button>
        <button type="button" class="btn btn-secondary prev">Previous</button>
        <button type="button" class="btn btn-primary next">Next</button>
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
                        <select class="form-select education-level" id="qualification1" name="qualification[]" required>
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
                        <input type="text" class="form-control" name="education[0][institution]" placeholder="Institution" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" name="education[0][year]" placeholder="Year of Passing" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" step="0.01" class="form-control" name="education[0][percentage]" placeholder="Percentage/CGPA" required>
                    </div>
                    <div class="col-md-6 mt-2">
                        <input type="file" name="education_certificate[]" class="form-control income-proof" accept=".pdf,.jpg,.png" required>
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
            <input type="number" class="form-control" name="family_income" required>
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
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>

</form>