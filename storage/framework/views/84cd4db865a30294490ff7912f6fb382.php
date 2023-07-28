<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/profile.css')); ?>">
    <style>
        #become-seller{
            background: #fff;
    text-align: center;
    padding: 128px 0 120px;
    border: 1px solid #ddd;
    border-radius: 2px;
    margin-bottom: 20px;
        }
        .btn-green{
            font-size: 16px;
    line-height: 24px;
    padding: 9px 24px;
    box-sizing: border-box;
    text-transform: initial;
        }
        .btn-standard.btn-green {
    background-color: #1dbf73;
    font-weight: 700;
    color: #fff!important;
    border: 1px solid transparent;
    padding-left: 10px;
    padding-right: 10px;
}
#become-seller a{
    text-decoration: none;
    color: #fff;
}
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-start"> 
            <div class="card p-4">
                <div class=" image d-flex flex-column justify-content-center align-items-center">
                    <img src="<?php echo e(asset('uploads/'.$user->id.'.jpg')); ?>" height="100" width="100" />
                    <span class="name mt-3"><?php echo e($user->name); ?></span> 
                    <span class="idd"><?php echo e($user->email); ?></span> 

                    <div class=" d-flex mt-2">
                        <button class="btn btn-info">Edit Profile</button> 
                    </div> 
                    <div class="text mt-3"> 
                        <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.
                            <br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. 
                        </span> 
                    </div> 
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                        <span><i class="fa fa-twitter"></i></span> 
                        <span><i class="fa fa-facebook-f"></i></span> 
                        <span><i class="fa fa-instagram"></i></span> 
                        <span><i class="fa fa-linkedin"></i></span> 
                    </div> <div class=" px-2 rounded mt-4 date "> 
                        <span class="join">Joined, <?php echo e(\Carbon\Carbon::parse($user->created_at)->format('M d, Y')); ?></span> 
                    </div> 
                </div> 
            </div>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center" id="become-seller">
        <a href="<?php echo e(route('seller.personal.info')); ?>"><span class="btn-standard btn-green">Become a Seller</span></a>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/profile.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/profile.blade.php ENDPATH**/ ?>