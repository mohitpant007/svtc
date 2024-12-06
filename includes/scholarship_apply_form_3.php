
<?php
//
?>

<!-- Step 2: Education Details -->
<div class="card step" id="step3" >
    <div class="card-header"><b>Step 3/4: Education Details</b></div>
    <div class="card-body">
    <form  id="thirdForm" enctype="multipart/form-data" method="POST" >
        <div id="educationContainer">
            <div class="education-item mb-3">
                <h5>Highest Education</h5>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-select education-level" id="qualification1" name="qualification[]" required>
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
                        <input type="text" class="form-control" name="education[0][institution]" placeholder="Institution Name" >
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" name="education[0][year]" placeholder="Year of Passing" >
                    </div>
                    <div class="col-md-3">
                        <input type="number" step="0.01" class="form-control" name="education[0][percentage]" placeholder="Percentage/CGPA" >
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="col-md-12">
        <label for="full_name" class="form-label important-upload">Eligibility Criteria: Applicants must have scored above 80% in SSLC and 70% or above in PUC/Graduation to be eligible for this scholarship.</label>    
        <label for="full_name" class="form-label important-upload">Note: Upload your previous three year document!</label>
        </div>
        <div id="fileUploadContainer">
            <div class="mb-3">
                <label for="file1" class="form-label">Upload File</label>
                <input type="file" class="form-control" id="file1" name="files[]">
                <input type="file" class="form-control mt-2" id="file1" name="files[]">
                <input type="file" class="form-control mt-2" id="file1" name="files[]">
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="addFileSection">Add More Files</button>
        <br>
        <a href="scholarship-apply-form-step-2"><button type="button" class="btn btn-secondary prev mt-2">Previous</button></a>
        <button type="submit" class="btn btn-primary next mt-2">Next</button>
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

