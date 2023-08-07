<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" href="<?php echo e(asset('hotel.ico')); ?>">
  <title>Miver-admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/dist/css/adminlte.min.css')); ?>">

  <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
            <!-- LEFT_NAV_BAR -->

            <?php echo $__env->make('inc.left-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    
 
    <!-- Main content -->
    <div class="content">
      <div class="container ml-0 mt-1">
        <!-- EVERYTHING WILL BE HERE -->
     
        <?php echo $__env->yieldContent('content'); ?>



        <!-- EVERYTHING WILL BE HERE -->
      </div>
    </div>
    <!-- /.content -->

<!-- /.content-wrapper -->



<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo e(asset('admin_lte/plugins/jquery/jquery.min.js')); ?> "></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin_lte/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('admin_lte/dist/js/demo.js')); ?>></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\miver\resources\views/layouts/admin.blade.php ENDPATH**/ ?>