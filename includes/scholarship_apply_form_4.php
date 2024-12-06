
<?php
//
?>

<!-- Step 2: Education Details -->


<!-- Step 3: Family Details -->


<!-- Step 4: Financial Details & Upload -->
<div class="card step" id="step4" >
<form  id="fourthForm" enctype="multipart/form-data" method="POST" >
    <div class="card-header"><b>Step 4/4: Applicant Bank Account Details</b></div>
    <div class="card-body">
        <div class="mb-3">
            <label for="family_income" class="form-label">Bank Account Holder Name  <span class="required">*</span></label>
            <input type="text" class="form-control" name="bank_holder_name" value="<?php echo getDetail($_SESSION['svtc_user_detais'], 'name'); ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="family_income" class="form-label">Bank Account Number  <span class="required">*</span></label>
            <input type="text" class="form-control" name="bank_account_number" required>
        </div>
        <div class="mb-3">
            <label for="family_income" class="form-label">IFSC code  <span class="required">*</span></label>
            <input type="text" class="form-control" name="bank_ifsc_code" required>
        </div>
        <div class="mb-3">
            <label for="family_income" class="form-label">Bank Name  <span class="required">*</span></label>
            <input type="text" class="form-control" name="bank_name" required>
        </div>
        <div class="mb-3">
            <label for="family_income" class="form-label">Branch Name  <span class="required">*</span></label>
            <input type="text" class="form-control" name="bank_name" required>
        </div>
        <div class="mb-3">
            <label for="family_income" class="form-label">Bank Statement / Bank Passbook / Cancelled Cheque leaf<span class="required">*</span></label>
            <input type="file" class="form-control" name="bank_doc" required>
        </div>
        
        <!-- <button type="button" class="btn btn-secondary" id="addFileSection">Add More Files</button> -->
        <a href="scholarship-apply-form-step-3"><button type="button" class="btn btn-secondary prev">Previous</button></a>
        <button type="submit" class="btn btn-primary next">Submit</button>

    </div>
</form>
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

