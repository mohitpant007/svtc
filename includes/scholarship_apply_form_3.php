<!-- Step 2: Education Details -->
<div class="card step" id="step3">
    <div class="card-header"><b>Step 3/3: Education Details</b></div>
    <div class="card-body">
        <form id="thirdForm" enctype="multipart/form-data" method="POST">
            <div id="educationContainer">
                <div class="education-item mb-3">
                    <h5>Scholarship applied for:</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email" class="form-label">Name of the institution/University</label><span class="required">*</span>
                            <input type="text" class="form-control" name="institute_name" placeholder="Institution Name">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Course/Program
                            </label><span class="required">*</span>
                            <select class="form-select education-level" id="qualification1" name="qualification[]" required>
                                <option value="">Select </option>
                                <?php foreach (ALL_COURSE[0] as $key => $value): ?>

                                    <option value="<?php echo $key; ?> "><?php echo $value; ?></option>
                                <?php endforeach; ?>

                            </select>
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
                        <div class="col-md-4">
                            <label for="email" class="form-label">Specialization <span class="required">*</span></label>
                            <input type="text" class="form-control" name="specialization" placeholder="Specialization">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="email" class="form-label">Acdamic Year/Semester</label>
                            <div class="row">
                                <div class="col-auto d-flex align-items-center">
                                    
                                    <input type="text" class="form-control text-center" placeholder="Year" style="max-width: 100px;">
                                   
                                    <span class="mx-2">/</span>
                                   
                                    <input type="text" class="form-control text-center" placeholder="Semester" style="max-width: 100px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <lable class="form-label">Upload admission card for the present academic year (JPEG/JPG/PNG/PDF) <span class="required">*</span></label>
                            <input type="file" class="form-control" id="file1" name="files[]">
                            <?php echo upload_validation_msg();?><br>
                        </div>
                        <div class="col-md-12 mt-3">
                            <lable class="form-label">Upload fee receipt (JPEG/JPG/PNG/PDF) <span class="required">*</span></label>
                            <input type="file" class="form-control" id="file1" name="files[]">
                            <?php echo upload_validation_msg();?><br>
                        </div>
                        <div class="mb-2 mt-5">
                            <div class="card-header">SSLC/Class 10/CBSE/ICSE </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="email" class="form-label">Year of passing <span class="required">*</span></label>
                                    <input type="text" class="form-control pancard_text" name="pancard_no" >
                                </div>
                                <div class="col-md-2">
                                    <label for="email" class="form-label">Percentage/CGPA <span class="required">*</span></label>
                                    <input type="text" class="form-control pancard_text" name="pancard_no" >
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Upload SSLC/Class 10 / CBSE / ICSE marks card</label><span class="required">*</span>
                                    <input type="file" class="form-control uplooad-file" name="pancard_image" value="">
                                    <?php echo upload_validation_msg();?><br>
                                    <?php
                                    
                                    if (isset($getApplicantDetails[0]['pancard_image']) && $getApplicantDetails[0]['pancard_image'] != "") { ?>
                                        <a href="<?php echo BASE_URL . '/documents/' . $getApplicantDetails[0]['pancard_image']; ?>" target="_blank">Click to View Pancard</a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <lable class="form-label">Upload PUC marks card if you have completed PUC</label><span class="required">*</span>
                            <input type="file" class="form-control" id="file1" name="files[]">
                            <?php echo upload_validation_msg();?><br>
                        </div>
                        <div class="col-md-12 mt-3">
                            <lable class="form-label">Upload last three years / 6 semester marks cards </label><span class="required">*</span>
                            <?php echo upload_validation_msg();?><br>
                            <!-- <input type="file" class="form-control mt-2" id="file1" name="files[]">
                            <input type="file" class="form-control mt-2" id="file1" name="files[]">
                            <input type="file" class="form-control mt-2" id="file1" name="files[]"> -->
                            <div id="fileUploadContainer">
                <div class="mb-3">
                    <label for="file1" class="form-label">Upload File</label>
                    <input type="file" class="form-control mt-2" id="file1" name="files[]">
                    <input type="file" class="form-control mt-2" id="file1" name="files[]">
                    <input type="file" class="form-control mt-2" id="file1" name="files[]">
                    <input type="file" class="form-control mt-2" id="file1" name="files[]">
                   
                </div>
            </div>
            <button type="button" class="btn btn-secondary" id="addFileSection">Add More Files</button>
                        </div>
                        
                        
                        <!-- <div class="col-md-3 mt-2">
                            <label for="email" class="form-label">SSLC/Class 10/CBSE/ICSE
                            </label>
                            <input type="number" class="form-control" name="education[0][year]" placeholder="Year of Passing">
                        </div> -->

                    </div>
                </div>

            </div>
            <div class="col-md-12">
                
                <label for="full_name" class="form-label important-upload">Note:  Upload Additional Documents!</label>
                <?php echo upload_validation_msg();?><br>
            </div>
            <div id="fileUploadContainer_1">
                <div class="mb-3">
                    <label for="file1" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="file1" name="files[]">
                   
                </div>
            </div>
            <button type="button" class="btn btn-secondary" id="addFileSection_1">Add More Files</button>
            <br>
            <a href="scholarship-apply-form-step-2"><button type="button" class="btn btn-secondary prev mt-2">Previous</button></a>
            <button type="submit" class="btn btn-primary next mt-2">Submit</button>
        </form>
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
                <input type="file" class="form-control" id="file1" name="files[]">
                <input type="file" class="form-control" id="file1" name="files[]">
            </div>
        </div>
        <!-- <button type="button" class="btn btn-secondary" id="addFileSection">Add More Files</button> -->
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