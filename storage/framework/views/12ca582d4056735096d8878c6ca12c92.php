<html>
<head>
  <?php echo $__env->make('component.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <title>Miverr</title>

   
        <?php echo $__env->make('component.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session()->has('name')): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/carts.css')); ?>">
<?php endif; ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>

<?php if(!session()->has('name')): ?>
  <?php echo $__env->make('component.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

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
                <?php if(!session()->has('name')): ?>
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
                                <i class="fa fa-bell" aria-hidden="true" style="font-size:25px"></i>
                                <span class="count"></span>
                            </p>
                            <div class="notification-container">
                              <div class="top">
                                <h2>Notifications</h2>
                              </div>
                              <div class="main">
                                <div class="notification-item odd">Notification 3</div>
                              </div>
                              <div class="footer">
                                <a href="#" style="text-decoration: underline; color:black; font-size: 12px;">mark as read</a>
                              </div>
                            </div>
                      </li>

                      <li id="messenger">
                        <p>
                          <i class="fa fa-comments" aria-hidden="true" style="font-size:25px"></i>
                            <span class="count"></span>
                          </p>
                          <div class="messenger-container">
                              <div class="top">
                                  <h2>Chat</h2>
                              </div>
                              <div class="main">  
                                <p class="text-center d-flex justify-content-center align-items-center loading-message" style="min-height: 180px;">Loading...</p>
                                <p class="text-center d-flex justify-content-center align-items-center no-messages-message" style="min-height: 180px;">No messages yet</p>
                              </div>
                              <div class="footer">
                                  <a href="#" style="text-decoration: underline; color:black; font-size: 12px;">all messages</a>
                              </div>
                          </div>
                      </li>

                      <li id="profile">
                        
                            <img class="user-avatar align-self-start" src="<?php echo e(asset('uploads/1.jpg')); ?>" alt="User Image" style="width:29px;height:29px;margin-bottom: 8px;">
                        
                        <div class="profile-container" id="userDropdown">
                          <div class="notification-item odd"><a href="<?php echo e(route('profile')); ?>" class="profile-item even">Profile</a></div>
                          <div class="notification-item even"><a href="#" class="profile-item odd">Setting</a></div>
                          <div class="notification-item even"><a href="#" class="profile-item odd">Change Password</a></div>
                          <div class="notification-item even"><a href="/logout" class="profile-item odd">Logout</a></div>
                        </div>
                      </li>
                    </ul>        
                <?php endif; ?>
              </nav>    
            </div>
          </div>
      </div>

    <?php echo $__env->make('component.header-bottom-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
  </header>


  <main id="#main_div">
      <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <?php if(!session()->has('name')): ?>
    <script src="<?php echo e(asset('js/register.js')); ?>"></script>
  <?php else: ?>
    <script src="<?php echo e(asset('js/logged.js')); ?>"></script>
  <?php endif; ?>

<script>
  if (window.location.href !== "http://localhost/miverr/") {
  var headerSearch = document.getElementById('header-search');
  var headerBottomMenu = document.querySelector('.header-bottom-menu');

  headerBottomMenu.classList.add('show');
  headerSearch.classList.add('show');
}
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH E:\Shahidur project\project\miver\resources\views/layouts/default.blade.php ENDPATH**/ ?>