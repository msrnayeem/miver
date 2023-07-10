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

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <meta name="theme-color" content="#fafafa">
</head>

<body>

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
              <ul>
                <li><a class="active" href="{{ route('profile') }}">Profile</a></li>
                <!-- <li><a class="join" href="#">join</a></li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    <nav class="header-bottom-menu">
        <ul>
            <li>
            <a href="#">Graphics & Design</a>
            <ul class="subcategories">
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Illustration</a></li>
                <!-- Add more subcategories here -->
            </ul>
            </li>
            <!-- Repeat the above structure for other categories -->
            <li>
                <a href="#">Digital Marketing</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Writing & Translation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Video & Animation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Music & Audio</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Programming & Tech</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Business</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="#">Lifestyle</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            
            <li>
                <a href="#">Others</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <!-- Repeat the above structure for other categories -->
            
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

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  
 
  <script>
  if (window.location.href !== "http://localhost/miverr/") {
  var headerSearch = document.getElementById('header-search');
  var headerBottomMenu = document.querySelector('.header-bottom-menu');

  headerBottomMenu.classList.add('show');
  headerSearch.classList.add('show');
}

</script>

 
</body>

</html>