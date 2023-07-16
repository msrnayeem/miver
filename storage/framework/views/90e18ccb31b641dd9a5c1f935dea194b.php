<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/user/login.css')); ?>">

<?php $__env->startSection('content'); ?>
<section>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="<?php echo e(route('loginn')); ?>" method="POST">
                        <?php echo csrf_field(); ?> <!-- Include CSRF token field -->
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info">
                                <span>Remember me</span>
                                <span><input id="remember-me" name="remember_me" type="checkbox"></span>
                            </label><br>
                            <br>
                            
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                        </div>
                        <div id="register-link" class="text-right">
                            
                            <a href="#" class="text-info">Register here</a>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  
  
           
  <script>
        
        var headerSearch = document.getElementById('header-search');
        var headerBottomMenu = document.querySelector('.header-bottom-menu');
        var sliderSection = document.querySelector('.slider');
        var sliderSectionHeight = sliderSection.offsetHeight;
        var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
      
        window.addEventListener('scroll', function() {
          scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollPosition > sliderSectionHeight * 0.5) {
              headerBottomMenu.classList.add('show');
              headerSearch.classList.add('show');
            } else {
              headerBottomMenu.classList.remove('show');
              headerSearch.classList.remove('show');
            }
         
        });
        </script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/login.blade.php ENDPATH**/ ?>