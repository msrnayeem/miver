document.getElementById('signInTrigger').addEventListener('click', function() {
    $('#signUpForm').hide();
    $('#signInForm').show();
    $('#joinModal').modal('show');
  });

  document.getElementById('joinTrigger').addEventListener('click', function() {
    $('#signInForm').hide();
    $('#signUpForm').show();
    $('#joinModal').modal('show');
  });

  document.getElementById('toggleSignUpForm').addEventListener('click', function() {
    $('#signInForm').hide();
    $('#signUpForm').show();
    $("#signIn_error").text("");
    $("#signUp_error").text("");
  });

  document.getElementById('toggleSignInForm').addEventListener('click', function() {
    $('#signUpForm').hide();
    $('#signInForm').show();
    $("#signUp_error").text("");
    $("#signIn_error").text("");
  });
  $("#signUpemail, #signUppassword, #signUppasswordC").focus(function() {
      $("#signUp_error").text("");
    });
    $("#signInemail, #signInpassword").focus(function() {
      $("#signIn_error").text("");
    });
  $("#signInForm").submit(function(e) {
      e.preventDefault();
      var all = $(this).serialize();
      var urll = '/loginn';
      
      $.ajax({
          url: urll,
          type: "POST",
          data: all,
          success: function(data) {
              if (data === 'done') {
                  window.location.href = "/";
              }
              else {
                  $("#signIn_error").text("Invalid Credentials");
              }
          },
          error: function() {
              $("#signIn_error").text("Error occurred during sign-in");
          }
      });
  });

  $("#signUpForm").submit(function(e) {
      e.preventDefault();
      var email = $("#signUpemail").val();
      var password = $("#signUppassword").val();
      var confirmPassword = $("#signUppasswordC").val();

      // Perform validation checks
      if (email === "") {
        $("#signUp_error").text("Please enter your email");
        return;
      }

      if (password === "") {
        $("#signUp_error").text("Please enter a password");
        return;
      }

      if (password.length < 8) {
        $("#signUp_error").text("Password should be at least 8 characters long");
        return;
      }

      if (!/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/[0-9]/.test(password)) {
        $("#signUp_error").text("Format : at least one uppercase letter, one lowercase letter, and one number");
        return;
      }

      if (password !== confirmPassword) {
        $("#signUp_error").text("Passwords do not match");
        return;
      }

      // If all validation checks pass, proceed with form submission via AJAX
      var all = $(this).serialize();
      var url = '/signup';

      $.ajax({
        url: url,
        type: "POST",
        data: all,
        success: function(data) {
          $("#signUpForm")[0].reset();
          $("#signUp_error").text(data.message);
        },
        error: function() {
          $("#signUp_error").text("Error occurred during sign-up");
        }
      });
  });