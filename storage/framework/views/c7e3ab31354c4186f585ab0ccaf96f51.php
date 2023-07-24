<!DOCTYPE html>
<html>
<head>
  
  <title>Miverr</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-***" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/@popperjs/core@2" media="all" rel="stylesheet" type="text/css" />
  <meta name="theme-color" content="#fafafa">
  <?php echo $__env->yieldPushContent('styles'); ?>

  
</head>
<body>
 
  <?php if(!session()->has('user_name')): ?>

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
                <img src="<?php echo e(asset('assets/images/sign.png')); ?>" alt="" width="100%" />
              </div>
              <div class="col-sm-6">
                <form id="signInForm" class="mt-4" method="post">
                  <?php echo csrf_field(); ?>
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
                  <?php echo csrf_field(); ?>
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
<?php endif; ?>


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
                  <a href="<?php echo e(route('index')); ?>">Miverr</a>
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
                
                <?php if(!session()->has('user_name')): ?>
                    <ul>
                        <!-- <li><a class="active" href="<?php echo e(route('profile')); ?>">Profile</a></li> -->
                        <li><a href="#"><i class="fas fa-flag-usa"></i>English</a></li>
                        <li><a href="#">Become a Seller</a></li>
                        <li id="signInTrigger">Sign In</li>
                        <li id="joinTrigger"><a href="#" class="active">Join</a></li>

                    </ul>
                <?php else: ?>
                
                    <ul>
                      <li id="notification">
                            <p>
                                <i class="fa-solid fa-message" ></i>
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span class="site-header__notification-count" data-notification-render="item_count">4</span>
                            </p>
                            
                            <div class="notification-container">
                              <div class="top">
                                <h2>Notifications</h2>
                              </div>
                              <div class="main">
                                <!-- Content of main div with overflow-y: auto; -->
                              </div>
                              <div class="footer">
                              <a href="#" style="text-decoration: underline;">mark as read</a>
                              </div>
                            </div>
                            
                      </li>
                       
                    <style>
                      .notification-container{
                        z-index: 333;
                            width: 18%;
                            height: 300px;
                            cursor: default;
                            background-color:cyan;
                            position: absolute;
                            top: 45%; /* This will position the cart panel below the cart icon */
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add some shadow for a better appearance */
                            border-radius: 1px;
                            border: 1px solid green;
                            display: none;
                            flex-direction: column;
                            right: 19%;
                            
                      } 
                      .cart-container{
                        z-index: 333;
                            width: 20%;
                            height: 300px;
                            cursor: default;
                            background-color:cyan;
                            position: absolute;
                            top: 45%; /* This will position the cart panel below the cart icon */
                            border-radius: 1px;
                            border: 1px solid green;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add some shadow for a better appearance */
                            display: none;
                            flex-direction: column;
                            right: 15%;
                            
                      }
                      .top {
                        height: 10%;
                        overflow: hidden;
                        background-color: #f0f0f0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                      }

                      .top h2 {
                        padding: 30px;
                        font-size: 15px;
                        background-color: yellow;
                      }

                      .main {
                        height: 80%;
                        overflow-y: auto;
                        padding: 10px;
                      }

                      .footer {
                        height: 10%;
                        background-color: #f0f0f0;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                      }

                      .footer a {
                        margin: 0;
                        font-size: 14px;
                        
                      }
                    </style>
                    
                        <li id="cart">
                          <p>
                              <i class="fa-solid fa-message" id="cartIcon"></i>
                              <span class="site-header__cart-count" data-cart-render="item_count">4</span>
                           </p>
                          
                          <div class="cart-container">
                            <div class="top">
                              <h2>Chat</h2>
                            </div>
                            <div class="main">
                              <!-- Content of main div with overflow-y: auto; -->
                            </div>
                            <div class="footer">
                             <a href="#" style="text-decoration: underline;"> all messages </a>
                            </div>
                          </div>
                          
                        </li>
                        
                        <li><a class="active" href="<?php echo e(route('profile')); ?>">Profile</a></li>
                        <li><a class="join" href="<?php echo e(route('logout')); ?>">Logout</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
                     
          </div>
        </div>
      </div>
    <nav class="header-bottom-menu">
        <ul>
            <li>
            <a href="<?php echo e(route('category', ['category' => 'graphics-design'])); ?>">Graphics & Design</a>
            <ul class="subcategories">
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Illustration</a></li>
                <!-- Add more subcategories here -->
            </ul>
            </li>
            <!-- Repeat the above structure for other categories -->
            <li>
                <a href="<?php echo e(route('category', ['category' => 'digital-marketing'])); ?>">Digital Marketing</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('category', ['category' => 'writing-translation'])); ?>">Writing & Translation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('category', ['category' => 'video-animation'])); ?>">Video & Animation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('category', ['category' => 'music-audio'])); ?>">Music & Audio</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('category', ['category' => 'programming-tech'])); ?>">Programming & Tech</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
            <a href="<?php echo e(route('category', ['category' => 'photography'])); ?>">Photography</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('category', ['category' => 'business'])); ?>">Business</a>
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
      
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    <footer class="footer-top">
      
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="f-t-left">
            <div class="row">
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>Categories s</h4>
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
                  <h4>About t</h4>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="../js/bootstrap-popover-x.js" type="text/javascript"></script>

<?php if(!session()->has('user_name')): ?>
  <script>
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
        var urll = '<?php echo e(route("loginn")); ?>';
        $.ajax({
            url: urll,
            type: "POST",
            data: all,
            success: function(data) {
                if (data === 'done') {
                    window.location.href = "<?php echo e(route('profile')); ?>";
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
        var url = '<?php echo e(route("signup")); ?>';

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
   
   
<?php endif; ?>

  <script>
  if (window.location.href !== "http://localhost/miverr/") {
  var headerSearch = document.getElementById('header-search');
  var headerBottomMenu = document.querySelector('.header-bottom-menu');

  headerBottomMenu.classList.add('show');
  headerSearch.classList.add('show');
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show cart container on cart icon click
        $('#cart').on('click', function() {
            $('.notification-container').hide();
            $('.cart-container').show();
        });

        // Show notification container on notification icon click
        $('#notification').on('click', function() {
            $('.cart-container').hide();
            $('.notification-container').show();
        });

        // Hide both containers when clicking outside them
        $(document).on('click', function(event) {
            if (
                !$(event.target).closest('#cart, #notification').length &&
                !$(event.target).closest('.cart-container, .notification-container').length
            ) {
                $('.cart-container, .notification-container').hide();
            }
        });
    });
</script>


</script>
<script>
        $(document).ready(function() {
            $('#popoverButton').click(function() {

              
                var popover = $(this);

                $.ajax({
                    url: '/get-notification-data',
                    type: 'GET',
                    success: function(response) {
                        // Process the response and update the popover content
                        var content = '';

                        if (response.length > 0) {
                            for (var i = 0; i < response.length; i++) {
                                var notification = response[i];
                                var message = notification.message;

                                content += '<p style="background color:blue;">' + message + '</p>';
                            }
                        } else {
                            content = '<p>No notifications found.</p>';
                        }

                        $('#popoverContent').html(content);

                        // Show the popover
                        popover.popover('show');
                    },
                    error: function(xhr, status, error) {
                        // Handle error if necessary
                        console.log(error);
                    }
                });

                return false;
            });
        });
    </script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\miver\resources\views/layouts/default.blade.php ENDPATH**/ ?>