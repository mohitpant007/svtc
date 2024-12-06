$(document).ready(function() {
    // Handle the form submit event
    $('#registrationForm').on('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      // Get form data
      var name = $('#name').val();
      var password = $('#password').val();
      var repeatPassword = $('#re_password').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      // Basic client-side validation
      if (password !== repeatPassword) {
        $.alert({
            title: 'Alert!',
            content: 'Password & Repeat Password are not same!',
        });
        return false;
      }

      // Prepare the form data to be sent via AJAX
      var formData = {
        name: name,
        password: password,
        repeat_password: repeatPassword,
        email:email,
        phone:phone
      };

      // Perform the AJAX request
      $.ajax({
        url: 'includes/register.php',  // The PHP file that will process the form data
        type: 'POST',            // The HTTP request type
        data: formData,          // The form data to send
        success: function(response) {
            var ajaxResonse = JSON.parse(response);
          // Display the response from the PHP script
          if (ajaxResonse.status == true) {
            jQuery.confirm({
                title: 'Success',
                content: 'Successfully Registered.Please login for scholarship!',
                buttons:{
                    ok: function () {
                      //   $("#registrationForm")[0].reset();
                      //  // $('#registrationForm').reset();
                      //   $("#loginModal").modal();
                      location.reload();
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
        error: function(xhr, status, error) {
          // Handle any errors that occur
          $('#response').html("An error occurred: " + error);
        }
      });
    });
    $('#login-form').on('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      // Get form data
     
      var email = $('#user_email').val();
      var password = $('#user_password').val();
      // Basic client-side validation
      
      // Prepare the form data to be sent via AJAX
      var formData = {
        password: password,
        email:email
      };

      // Perform the AJAX request
      $.ajax({
        url: 'includes/validate_login.php',  // The PHP file that will process the form data
        type: 'POST',            // The HTTP request type
        data: formData,          // The form data to send
        success: function(response) {
            var ajaxResonse = JSON.parse(response);
          // Display the response from the PHP script
          if (ajaxResonse.status == true) {
            jQuery.confirm({
                title: 'Success',
                content: 'Successfully Login! ',
                buttons:{
                    ok: function () {
                        location.reload();
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
        error: function(xhr, status, error) {
          // Handle any errors that occur
          $('#response').html("An error occurred: " + error);
        }
      });
    });
  });