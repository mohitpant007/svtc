<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Large Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Student Registration Form</h2>
        <form id="studentForm" enctype="multipart/form-data" method="POST" action="process.php">
            <!-- Step 1 -->
            <div class="card step" id="step1">
                <div class="card-header">Step 1: Basic Information</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="full_name" id="full_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender" id="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary next">Next</button>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="card step" id="step2" style="display: none;">
                <div class="card-header">Step 2: Education Details</div>
                <div class="card-body">
                    <div id="educationContainer">
                        <div class="education-item mb-3">
                            <h5>Education #1</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="education[0][degree]" placeholder="Degree" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="education[0][institution]" placeholder="Institution" required>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" name="education[0][year]" placeholder="Year of Passing" required>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" step="0.01" class="form-control" name="education[0][percentage]" placeholder="Percentage" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" id="addEducation">Add More Education</button>
                    <button type="button" class="btn btn-secondary prev">Previous</button>
                    <button type="button" class="btn btn-primary next">Next</button>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="card step" id="step3" style="display: none;">
                <div class="card-header">Step 3: Family Details</div>
                <div class="card-body">
                    <div id="familyContainer">
                        <div class="family-item mb-3">
                            <h5>Family Member #1</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="family[0][name]" placeholder="Name" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="family[0][relationship]" placeholder="Relationship" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="family[0][contact]" placeholder="Contact" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="family[0][occupation]" placeholder="Occupation" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" id="addFamily">Add More Family</button>
                    <button type="button" class="btn btn-secondary prev">Previous</button>
                    <button type="button" class="btn btn-primary next">Next</button>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="card step" id="step4" style="display: none;">
                <div class="card-header">Step 4: Financial Details & Upload</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="family_income" class="form-label">Family Income</label>
                        <input type="number" class="form-control" name="family_income" id="family_income" required>
                    </div>
                    <div class="mb-3">
                        <label for="uploaded_document" class="form-label">Upload Document</label>
                        <input type="file" class="form-control" name="uploaded_document" id="uploaded_document" required>
                    </div>
                    <button type="button" class="btn btn-secondary prev">Previous</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
    let educationCount = 1;
    let familyCount = 1;

    $("#addEducation").click(function () {
        const educationHTML = `
        <div class="education-item mb-3">
            <h5>Education #${educationCount + 1}</h5>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="education[${educationCount}][degree]" placeholder="Degree" required>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="education[${educationCount}][institution]" placeholder="Institution" required>
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" name="education[${educationCount}][year]" placeholder="Year of Passing" required>
                </div>
                <div class="col-md-2">
                    <input type="number" step="0.01" class="form-control" name="education[${educationCount}][percentage]" placeholder="Percentage" required>
                </div>
            </div>
        </div>`;
        $("#educationContainer").append(educationHTML);
        educationCount++;
    });

    $("#addFamily").click(function () {
        const familyHTML = `
        <div class="family-item mb-3">
            <h5>Family Member #${familyCount + 1}</h5>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" name="family[${familyCount}][name]" placeholder="Name" required>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="family[${familyCount}][relationship]" placeholder="Relationship" required>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="family[${familyCount}][contact]" placeholder="Contact" required>
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="family[${familyCount}][occupation]" placeholder="Occupation" required>
                </div>
            </div>
        </div>`;
        $("#familyContainer").append(familyHTML);
        familyCount++;
    });

    $(".next").click(function () {
        $(this).closest(".step").hide().next(".step").show();
    });

    $(".prev").click(function () {
        $(this).closest(".step").hide().prev(".step").show();
    });
});

        </script>
</body>
</html>
