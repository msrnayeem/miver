<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">


  <title>Miverr</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

 
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <style>
    .modal-body .col-sm-8 {
    text-align: center;
}
.intro-title {
  margin-bottom: 5px;
  font-weight: 400;
  color: #333;
}

@media (min-width: 768px) {
  /* Medium and larger devices (tablets and desktop screens), larger width */
  .modal-lg {
    max-width: 800px;
  }
}
@media (max-width: 767px) {
  /* Hide the image column on mobile devices */
  .modal-content .col-sm-6:first-child {
    display: none;
  }
  
  /* Make the login part take up the full width on mobile devices */
  .modal-content .col-sm-6:last-child {
    width: 100%;
  }
}


  </style>
<!-- Modal -->
<div class="modal fade" id="joinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="{{ asset('assets/images/sign.png') }}" alt="" width="100%" />
            </div>
            <div class="col-sm-6">
              <form id="signInForm" class="mt-4" method="post">
                @csrf
                <div class="form-group">
                  <h3>Sign in to your account</h3>
                </div>

                <div class="form-group">
                  <p>Don't have an account? <a href="#" id="toggleSignUpForm">Sign Up</a></p>
                </div>
                
                <div id="signIn_error" style="color: red; margin-top: 30px;"></div>

                <div class="form-group" style="margin-top: 10px;">
                  <label for="email">Email</label>
                  <input type="email" id="signInemail" name="signInemail" class="form-control" required/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="signInpassword" name="signInpassword" class="form-control" required/>
                </div>
                <div class="form-group d-flex justify-content-end" style="margin-top: 30px;">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
                
              </form>

              <form id="signUpForm" class="mt-4" style="display: none;">
                @csrf
                <div class="form-group">
                  <h3>Create a new account</h3>
                </div>

                <div class="form-group">
                  <p>Already have an account? <a href="#" id="toggleSignInForm">Sign In</a></p>
                </div>

                <div id="signUp_error" style="color: red; margin-top: 30px;"></div>

                <div class="form-group" style="margin-top: 10px;">
                  <label for="email">Email</label>
                  <input type="email" id="signUpemail" name="signUpemail" class="form-control"  />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="signUppassword" name="signUppassword" class="form-control" />
                </div>
                <div class="form-group">
                  <label for="signUppasswordC">Confirm Password</label>
                  <input type="password" id="signUppasswordC" name="signUppasswordC" class="form-control" />
                </div>
                <div class="form-group d-flex justify-content-end" style="margin-top: 20px;">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- end modal -->


  <!-- Add your site or application content here -->
  <header class="header sticky-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="left">
            <div class="row">
              <div class="col-lg-2">
                <div class="logo">
                  <a href="{{ route('index') }}">Miverr</a>
                </div>
              </div>
              <div class="col-lg-10" id="header-search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Find Service" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    <div class="input-group-append">
                    <button class="search btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right">
              <nav class="header-right-menu">
                
                @if(!session()->has('user_name'))
                    <ul>
                        <!-- <li><a class="active" href="{{ route('profile') }}">Profile</a></li> -->
                        <li><a href="#"><i class="fas fa-flag-usa"></i>English</a></li>
                        <li><a href="#">Become a Seller</a></li>
                        <li id="signInTrigger">Sign In</li>
                        <li id="joinTrigger"><a href="#" class="active">Join</a></li>

                    </ul>
                @else
                    <ul>
                        <li><a class="active" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="join" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                @endif
            </nav>

          </div>
        </div>
      </div>
    <nav class="header-bottom-menu">
        <ul>
            <li>
            <a href="{{ route('category', ['category' => 'graphics-design']) }}">Graphics & Design</a>
            <ul class="subcategories">
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Illustration</a></li>
                <!-- Add more subcategories here -->
            </ul>
            </li>
            <!-- Repeat the above structure for other categories -->
            <li>
                <a href="{{ route('category', ['category' => 'digital-marketing']) }}">Digital Marketing</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="{{ route('category', ['category' => 'writing-translation']) }}">Writing & Translation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="{{ route('category', ['category' => 'video-animation']) }}">Video & Animation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="{{ route('category', ['category' => 'music-audio']) }}">Music & Audio</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="{{ route('category', ['category' => 'programming-tech']) }}">Programming & Tech</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
            <a href="{{ route('category', ['category' => 'photography']) }}">Photography</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="{{ route('category', ['category' => 'business']) }}">Business</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>            
        </ul>
    </nav>

    </div>
  </header>


    <main>
        @yield('content')
    </main>


    <footer class="footer-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="f-t-left">
            <div class="row">
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>Categories</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Graphics & Design</a></li>
                      <li><a href="#">Digital Marketing</a></li>
                      <li><a href="#">Writing & Translation</a></li>
                      <li><a href="#">Video & Animation</a></li>
                      <li><a href="#">Music & Audio</a></li>
                      <li><a href="#">Programming & Tech</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Sitemap</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>About</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Press & News</a></li>
                      <li><a href="#">Partnerships</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms of Service</a></li>
                      <li><a href="#">Intellectual Property Claims</a></li>
                      <li><a href="#">Investor Relations</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>Support</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Help & Support</a></li>
                      <li><a href="#">Trust & Safety</a></li>
                      <li><a href="#">Selling on Miverr</a></li>
                      <li><a href="#">Buying on Miverr</a></li>                 
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="f-t-right">
            <div class="row">
              <div class="col-lg-6">
                <div class="f-r-box">
                  <h4>Community</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Forum</a></li>
                      <li><a href="#">Community Standards</a></li>                 
                      <li><a href="#">Podcast</a></li>                 
                      <li><a href="#">Affiliates</a></li>                 
                      <li><a href="#">PodInvite a Friendcast</a></li>                 
                      <li><a href="#">Become a Seller</a></li>                 
                      <li><a href="#">Miverr Elevate <br> <small>Exclusive Benefits</small></a></li>                                 
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="f-r-box">
                  <h4>More From Miverr</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Miverr Pro</a></li>
                      <li><a href="#">Miverr Studios</a></li>
                      <li><a href="#">Miverr Logo Maker</a></li>
                      <li><a href="#">Miverr Guides</a></li>                 
                      <li><a href="#">Get Inspired</a></li>                 
                      <li><a href="#">ClearVoice <br>
                        <small>Content Marketing</small> </a></li>                 
                      <li><a href="#">AND CO <br>
                        <small>Invoice Software</small> </a></li>                 
                      <li><a href="#">Learn <br>
                        <small>Online Courses</small> </a></li>                                                                      
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="f-b-left">
            <p><span>miverr</span>© Miverr International Ltd. 2020</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="f-b-right">
            <nav>
              <ul>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><span><i class="fas fa-globe"></i></span>English</a></li>
                <li><a href="#">$USD</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script> -->
 

<!--  
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script> -->
  
  
  <script>
    

  if (window.location.href !== "http://localhost/miverr/") {
  var headerSearch = document.getElementById('header-search');
  var headerBottomMenu = document.querySelector('.header-bottom-menu');

  headerBottomMenu.classList.add('show');
  headerSearch.classList.add('show');
}

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
    var urll = '{{ route("loginn") }}';
    $.ajax({
        url: urll,
        type: "POST",
        data: all,
        success: function(data) {
            if (data === 'done') {
                window.location.href = "{{ route('profile') }}";
            }
            else {
                $("#signIn_error").text("Invalid Credentials");
            }
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
    var url = '{{ route("signup") }}';

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



</script>

 
</body>

</html>