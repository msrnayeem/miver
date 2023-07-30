<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">
    <style>
      .text-center{
        margin-bottom: 22px;
        font-size:25px;
      }
      label{
        font-size: 18px;
      }
    </style>
 
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


  <div class="container">
    <div class="row my-5">
      <!-- Left Column -->
      <div class="col-md-6">
        <!-- Basic Row -->
        <div class="row my-5">
          <div class="col-md-12">
            <h4 class="text-center">Basic</h4>
            <!-- First Row inside Basic -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="basicName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="basicName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Basic -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="basicDescription">Description:</label>
              </div>
              <div class="col-md-6">
              <textarea id="basicDescription" class="form-control" placeholder="Enter Description"></textarea>
              </div>
            </div>
            <!-- Third Row inside Basic -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="basicTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="basicTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>

        <!-- Standard Row -->
        <div class="row my-5">
          <div class="col-md-12">
            <h4 class="text-center">Standard</h4>
            <!-- First Row inside Standard -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="standardName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="standardName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Standard -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="standardDescription">Description:</label>
              </div>
              <div class="col-md-6">
                <textarea id="standardDescription" class="form-control" placeholder="Enter Description"></textarea>
              </div>
            </div>
            <!-- Third Row inside Standard -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="standardTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="standardTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>

        <!-- Premium Row -->
        <div class="row mt-5">
          <div class="col-md-12">
            <h4 class="text-center">Premium</h4>
            <!-- First Row inside Premium -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="premiumName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="premiumName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Premium -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="premiumDescription">Description:</label>
              </div>
              <div class="col-md-6">
                <textarea id="premiumDescription" class="form-control" placeholder="Enter Description"></textarea>
              </div>
            </div>
            <!-- Third Row inside Premium -->
            <div class="row my-3">
              <div class="col-md-6">
                <label for="premiumTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="premiumTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6 align-self-start mt-5">
        <!-- Image Input Field -->
        <div class="row my-5">
          <div class="col-md-6">
            <label for="imageInput">Image:</label>
          </div>
          <div class="col-md-6">
            <input type="file" id="imageInput" class="form-control-file">
          </div>
        </div>
         
      </div>

    </div>
    <div class="row my-2 py-2 text-end">
          <a href="<?php echo e(route('profile')); ?>"><span class="btn btn" style="background-color:#1dbf73; color:white; padding-inline:50px">Save</span></a>
    </div> 
  </div>

 

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('')); ?>"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap CSS (make sure to include the Bootstrap CSS in your HTML) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Shahidur project\project\miver\resources\views/pages/user/gig-info.blade.php ENDPATH**/ ?>