$(document).ready(function () {
    let educationCount = 1;
    let familyCount = 2;
    $(".first-form").click(function () {
        $("#studentForm").validate({
            rules: {
                no_of_brother: {
                    
                    digits: true, // Built-in rule for positive integers
                },
                no_of_sister: {
                  
                    digits: true, // Built-in rule for positive integers
                }
            },
            messages: {
                no_of_brother: {
                    digits: "Please enter a valid number.",
                },
                no_of_sister: {
                    digits: "Please enter a valid number.",
                },
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            submitHandler: function(form) {
                const formData = $(form).serialize();
                $.ajax({
                    url: "includes/schollarship_common_function.php", // Replace with your URL
                    type: "POST", // Change to POST if needed
                    beforeSend: function () {
                      $("#form-loader").show(); // Show loader
                    },
                    data:{'action':'basic_details','formdata':formData},
                    success: function (response) {
                        var ajaxResonse = JSON.parse(response);
                        if (ajaxResonse.status == true) {
                            jQuery.confirm({
                                title: 'Success',
                                content: 'Successfully Saved! ',
                                buttons:{
                                    ok: function () {
                                        window.location.href = BASE_URL+"scholarship-apply-form-step-2";
                                    }
                                }
                            });
                          }else{
                            jQuery.confirm({
                                title: 'Alert',
                                content: ajaxResonse.msg,
                                buttons:{
                                    ok: function () {
                                        //location.reload();
                                    }
                                }
                                
                            });
                          }
                    },
                    error: function (xhr, status, error) {
                      $("#responseMessage").html(`<p>Error: ${error}</p>`);
                    },
                    complete: function () {
                      $("#form-loader").hide(); // Hide loader
                    },
                  });
                
                //$(this).closest(".step").hide().next(".step").show();
            }
        });
        
    });
    $(".second-form").click(function () {
        $("#secondForm").validate({
            rules: {
                
            },
            messages: {
                
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            submitHandler: function(form) {
                const formData = $(form).serialize();
                $.ajax({
                    url: "includes/schollarship_common_function.php", // Replace with your URL
                    type: "POST", // Change to POST if needed
                    beforeSend: function () {
                      $("#form-loader").show(); // Show loader
                    },
                    data:{'action':'basic_details','formdata':formData},
                    success: function (response) {
                        var ajaxResonse = JSON.parse(response);
                        if (ajaxResonse.status == true) {
                            jQuery.confirm({
                                title: 'Success',
                                content: 'Successfully Saved! ',
                                buttons:{
                                    ok: function () {
                                        window.location.href = BASE_URL+"scholarship-apply-form-step-2";
                                    }
                                }
                            });
                          }else{
                            jQuery.confirm({
                                title: 'Alert',
                                content: ajaxResonse.msg,
                                buttons:{
                                    ok: function () {
                                        //location.reload();
                                    }
                                }
                                
                            });
                          }
                    },
                    error: function (xhr, status, error) {
                      $("#responseMessage").html(`<p>Error: ${error}</p>`);
                    },
                    complete: function () {
                      $("#form-loader").hide(); // Hide loader
                    },
                  });
                
                //$(this).closest(".step").hide().next(".step").show();
            }
        });
        
    });
    // $("#secondForm").on("submit", function (e) {
        
    //     e.preventDefault(); // Prevent the default form submission behavior
        
    //     // Collect form data
    //     let formData = $(this).serialize(); 
    //     jQuery.confirm({
    //         title: 'Success',
    //         content: 'Successfully Saved! ',
    //         buttons:{
    //             ok: function () {
    //                 window.location.href = BASE_URL+"scholarship-apply-form-step-3";
    //             }
    //         }
    //     });
    //     // $.ajax({
    //     //     url: "includes/schollarship_common_function.php", // Replace with your URL
    //     //     type: "POST", // Change to POST if needed
    //     //     beforeSend: function () {
    //     //       $("#form-loader").show(); // Show loader
    //     //     },
    //     //     data:{'action':'family_details','formdata':formData},
    //     //     success: function (response) {
    //     //         var ajaxResonse = JSON.parse(response);
    //     //         if (ajaxResonse.status == true) {
    //     //             jQuery.confirm({
    //     //                 title: 'Success',
    //     //                 content: 'Successfully Saved! ',
    //     //                 buttons:{
    //     //                     ok: function () {
    //     //                         window.location.href = BASE_URL+"scholarship-apply-form-step-2";
    //     //                     }
    //     //                 }
    //     //             });
    //     //           }else{
    //     //             jQuery.confirm({
    //     //                 title: 'Alert',
    //     //                 content: ajaxResonse.msg,
    //     //                 buttons:{
    //     //                     ok: function () {
    //     //                         //location.reload();
    //     //                     }
    //     //                 }
                        
    //     //             });
    //     //           }
    //     //     },
    //     //     error: function (xhr, status, error) {
    //     //       $("#responseMessage").html(`<p>Error: ${error}</p>`);
    //     //     },
    //     //     complete: function () {
    //     //       $("#form-loader").hide(); // Hide loader
    //     //     },
    //     //   });
    // });
    $("#thirdForm").on("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission behavior
        
        // Collect form data
        let formData = $(this).serialize(); 
        jQuery.confirm({
            title: 'Success',
            content: 'Successfully Saved!',
            buttons:{
                ok: function () {
                    window.location.href = BASE_URL+"scholarship-apply-form-step-4";
                }
            }
        });
        // $.ajax({
        //     url: "includes/schollarship_common_function.php", // Replace with your URL
        //     type: "POST", // Change to POST if needed
        //     beforeSend: function () {
        //       $("#form-loader").show(); // Show loader
        //     },
        //     data:{'action':'family_details','formdata':formData},
        //     success: function (response) {
        //         var ajaxResonse = JSON.parse(response);
        //         if (ajaxResonse.status == true) {
        //             jQuery.confirm({
        //                 title: 'Success',
        //                 content: 'Successfully Saved! ',
        //                 buttons:{
        //                     ok: function () {
        //                         window.location.href = BASE_URL+"scholarship-apply-form-step-2";
        //                     }
        //                 }
        //             });
        //           }else{
        //             jQuery.confirm({
        //                 title: 'Alert',
        //                 content: ajaxResonse.msg,
        //                 buttons:{
        //                     ok: function () {
        //                         //location.reload();
        //                     }
        //                 }
                        
        //             });
        //           }
        //     },
        //     error: function (xhr, status, error) {
        //       $("#responseMessage").html(`<p>Error: ${error}</p>`);
        //     },
        //     complete: function () {
        //       $("#form-loader").hide(); // Hide loader
        //     },
        //   });
    });
    $("#fourthForm").on("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission behavior
        
        // Collect form data
        let formData = $(this).serialize(); 
        jQuery.confirm({
            title: 'Success',
            content: 'Successfully Submited Application!  ',
            buttons:{
                ok: function () {
                    window.location.href = BASE_URL+"thank-you";
                }
            }
        });
        // $.ajax({
        //     url: "includes/schollarship_common_function.php", // Replace with your URL
        //     type: "POST", // Change to POST if needed
        //     beforeSend: function () {
        //       $("#form-loader").show(); // Show loader
        //     },
        //     data:{'action':'family_details','formdata':formData},
        //     success: function (response) {
        //         var ajaxResonse = JSON.parse(response);
        //         if (ajaxResonse.status == true) {
        //             jQuery.confirm({
        //                 title: 'Success',
        //                 content: 'Successfully Saved! ',
        //                 buttons:{
        //                     ok: function () {
        //                         window.location.href = BASE_URL+"scholarship-apply-form-step-2";
        //                     }
        //                 }
        //             });
        //           }else{
        //             jQuery.confirm({
        //                 title: 'Alert',
        //                 content: ajaxResonse.msg,
        //                 buttons:{
        //                     ok: function () {
        //                         //location.reload();
        //                     }
        //                 }
                        
        //             });
        //           }
        //     },
        //     error: function (xhr, status, error) {
        //       $("#responseMessage").html(`<p>Error: ${error}</p>`);
        //     },
        //     complete: function () {
        //       $("#form-loader").hide(); // Hide loader
        //     },
        //   });
    });
    // $(".second-form").click(function () {
    //     // $("#secondForm").validate({
    //     //     rules: {
                
    //     //     },
    //     //     messages: {
                
    //     //     },
    //     //     errorPlacement: function(error, element) {
    //     //         error.insertAfter(element);
    //     //     },
    //     //     submitHandler: function(form) {
    //     //         const formData = $(form).serialize();
    //     //         jQuery.confirm({
    //     //             title: 'Success',
    //     //             content: 'Successfully Saved! ',
    //     //             buttons:{
    //     //                 ok: function () {
    //     //                     window.location.href = BASE_URL+"scholarship-apply-form-step-3";
    //     //                 }
    //     //             }
    //     //         });
    //     //         // $.ajax({
    //     //         //     url: "includes/schollarship_common_function.php", // Replace with your URL
    //     //         //     type: "POST", // Change to POST if needed
    //     //         //     beforeSend: function () {
    //     //         //       $("#form-loader").show(); // Show loader
    //     //         //     },
    //     //         //     data:{'action':'basic_details','formdata':formData},
    //     //         //     success: function (response) {
    //     //         //         var ajaxResonse = JSON.parse(response);
    //     //         //         if (ajaxResonse.status == true) {
    //     //         //             jQuery.confirm({
    //     //         //                 title: 'Success',
    //     //         //                 content: 'Successfully Saved! ',
    //     //         //                 buttons:{
    //     //         //                     ok: function () {
    //     //         //                         window.location.href = BASE_URL+"scholarship-apply-form-step-2";
    //     //         //                     }
    //     //         //                 }
    //     //         //             });
    //     //         //           }else{
    //     //         //             jQuery.confirm({
    //     //         //                 title: 'Alert',
    //     //         //                 content: ajaxResonse.msg,
    //     //         //                 buttons:{
    //     //         //                     ok: function () {
    //     //         //                         //location.reload();
    //     //         //                     }
    //     //         //                 }
                                
    //     //         //             });
    //     //         //           }
    //     //         //     },
    //     //         //     error: function (xhr, status, error) {
    //     //         //       $("#responseMessage").html(`<p>Error: ${error}</p>`);
    //     //         //     },
    //     //         //     complete: function () {
    //     //         //       $("#form-loader").hide(); // Hide loader
    //     //         //     },
    //     //         //   });
                
    //     //         //$(this).closest(".step").hide().next(".step").show();
    //     //     }
    //     // });
        
    // });
    $("input[name='brother_occupation[]']").each(function (index) {
           
        console.log("Adding rules for: ", $(this).attr("name"));
        $(this).rules("add", {
            required: true,
        minlength: 3,
        messages: {
            required: `Occupation ${index + 1} is required`,
            minlength: `Occupation ${index + 1} must be at least 3 characters`,
        },
            
        });
    });
    // $(".next").click(function () {
    //     //if ($("#studentForm").valid()) { // Check if the form is valid
    //         $(this).closest(".step").hide().next(".step").show();
    //     //}
    // });

    $(".prev").click(function () {
        $(this).closest(".step").hide().prev(".step").show();
    });

    // Add More Education
    $("#addEducation").click(function () {
        const html = `
        <div class="education-item mb-3 education-row">
            <h5>Education #${educationCount + 1}</h5>
            <div class="row ">
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
                            <select name="semester[]" class="form-select" >
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
                            <select name="branch[]" class="form-select mt-2" >
                                <option value="">Select Branch</option>
                                <option value="BTech">BTech</option>
                                <option value="BE">BE</option>
                            </select>
                </div>
                <div class="col-md-3"><input type="text" class="form-control" name="education[${educationCount}][institution]" placeholder="Institution" required></div>
                <div class="col-md-2"><input type="number" class="form-control" name="education[${educationCount}][year]" placeholder="Year of Passing" required></div>
                <div class="col-md-2"><input type="number" step="0.01" class="form-control" name="education[${educationCount}][percentage]" placeholder="Percentage/CGPA" required></div>
                <div class="col-md-6 mt-2">
                        <input type="file" name="education_certificate[]" class="form-control income-proof" accept=".pdf,.jpg,.png" required>
                 </div>
                <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-btn mt-2">Remove</button>
                </div>
            </div>
        </div>`;
        $("#educationContainer").append(html);
        educationCount++;
    });

    // Add More Family
    $("#addFamily").click(function () {
        const html = `
        <div class="family-item mb-3 family-member">
            <h5>Family Member #${familyCount + 1}</h5>
            <div class="row">
                <div class="col-md-3"><input type="text" class="form-control" name="family[${familyCount}][name]" placeholder="Name" required></div>
                <div class="col-md-3"><select class="form-select" id="dob-month" name="dob-month" required>
                                <option value="" selected disabled>Select Relationship</option>
                                <option value="father">Father</option>
                                <option value="mother">Mother</option>
                                <option value="brother">Brother</option>
                                <option value="sister">Sister</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="husband">Husband</option>
                                <option value="wife">Wife</option>
                            </select></div>
                            <div class="col-md-3"><select name="occupation[]" class="form-control occupation-select" required>
                                <option value="">Select Occupation</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Student">Student</option>
                                <option value="IT Professional">IT Professional</option>
                                <option value="Retire">Retire</option>
                                <option value="Not Employed">Not Employed</option>
                                <option value="Other">Other</option>
                           </select></div>
                <div class="col-md-3"><input type="text" class="form-control" name="family[${familyCount}][contact]" placeholder="Contact Number" required></div>
                <div class="col-md-6 mt-2">
                        <input type="file" name="family[0][income_proof]" class="form-control income-proof" accept=".pdf,.jpg,.png" required>
                        <div class="error"></div>
                        </div>
                
                
            </div>
        </div>`;
        $("#familyContainer").append(html);
        familyCount++;
    });
    $('#educationContainer').on('click', '.remove-btn', function () {
        $(this).closest('.education-row').remove();
    });
    let fileIndex = 2; // Start with the next index after the first file input

            // Add a new file input section when the button is clicked
    $('#addFileSection').click(function () {
        const fileSection = `
        <div class="mb-3">
            <input type="file" class="form-control" id="file${fileIndex}" name="files[]">
        </div>`;
        $('#fileUploadContainer').append(fileSection);
        fileIndex++;
    });
    let educationfileIndex = 2; // Start with the next index after the first file input

            // Add a new file input section when the button is clicked
    $('#addEducationFileSection').click(function () {
        const fileSection = `
        <div class="mb-3">
            <input type="file" class="form-control" id="file${fileIndex}" name="files[]">
        </div>`;
        $('#fileEducationUploadContainer').append(fileSection);
        educationfileIndex++;
    });
    // $(document).on("change", ".occupation-select", function () {
    //     const occupation = $(this).val();
    //     const fileInput = $(this).closest(".family-member").find(".income-proof");
    //     const errorDiv = $(this).closest(".family-member").find(".error");

    //     if (occupation !== "Unemployed") {
    //         fileInput.prop("required", true);
    //         fileInput.attr("data-validation", "Salary slip or Bank statement required");
    //         errorDiv.text("Please upload a salary slip or bank statement.");
    //     } else if (occupation === "Unemployed") {
    //         fileInput.prop("required", true);
    //         fileInput.attr("data-validation", "Bank statement required");
    //         errorDiv.text("Please upload a bank statement.");
    //     } else {
    //         fileInput.prop("required", false);
    //         errorDiv.text("");
    //     }
    // });
    $(document).on("change", ".education-level", function () {
        const educationLevel = $(this).val();
        const educationItem = $(this).closest(".education-item");
        const graduationFields = educationItem.find(".graduation-fields");

        if (educationLevel === "Graduate" || educationLevel === "Engineering") {
            graduationFields.show();
        } else {
            graduationFields.hide();
        }
        });

        $('#single-parent').change(function () {
            if ($(this).is(':checked')) {
                $('#sigle_parent_details').show(); // Show the div
                $('#mother_name').val('');
                $('#father_name').val('');
                $('#father_details').hide();
                $('#mother_details').hide();
            } else {
                $('#sigle_parent_details').hide(); // Show the div
                $('#parent_relation').val('');
                $('#single_parent_name').val('');
                $('#father_details').show();
                $('#mother_details').show();
            }
        });  
        $('#same-current-address').change(function () {
            if ($(this).is(':checked')) {
               let current_address = $('#current_address').val();
               $('#permanent_address').val(current_address);
            } else {
                $('#permanent_address').val('');
            }
        });  
        
        if(single_parent == '1'){
                $('#sigle_parent_details').show(); // Show the div
                $('#mother_name').val('');
                $('#father_name').val('');
                $('#father_details').hide();
                $('#mother_details').hide();
        }else{
            $('#sigle_parent_details').hide(); // Show the div
                $('#parent_relation').val('');
                $('#single_parent_name').val('');
                $('#father_details').show();
                $('#mother_details').show();
        }
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd", // Format to match PHP's date
            changeMonth: true,      // Enable month dropdown
            changeYear: true,       // Enable year dropdown
            yearRange: "1900:2100", // Adjust the year range
          });
          $("#open-calendar").on("click", function () {
            $("#datepicker").datepicker("show");
          });
});
