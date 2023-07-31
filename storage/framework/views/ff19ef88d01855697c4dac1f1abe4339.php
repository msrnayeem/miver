<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/profile.css')); ?>">
    <style>
        /* #become-seller{
            background: #fff;
    text-align: center;
    padding: 128px 0 120px;
    border: 1px solid #ddd;
    border-radius: 2px;
    margin-bottom: 20px;
        } */
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

#active-gigs{
    background-color:#f7f7f7;
    border-bottom: 6px solid #1dbf73;
    padding: 16px 16px;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
}
#drafts{
    background-color:#f7f7f7;
    padding: 16px 16px;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
    color: #1dbf73;
}

.gig_card{
    width: 100%;
    height: 300px;
    background-color: #f7f7f7;
    cursor: pointer;
}
.rounded-circle{
    height: 100px;
    background-color: #78cdd2;
    width: 100px;
}

.gig_image{
    object-fit: cover;
    background-repeat: no-repeat;
    height:55%;
    width:100%;
}

.gig_title{
    font-size: 20px;
    font-weight: 600;
}
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-5">
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
                        </div> 
                        <div class=" px-2 rounded mt-4 date "> 
                            <span class="join">Joined, <?php echo e(\Carbon\Carbon::parse($user->created_at)->format('M d, Y')); ?></span> 
                        </div> 
                        <br><br>
                        <div class="col-md-6" id="become-seller">
                                <a href="<?php echo e(route('seller.personal.info')); ?>">
                                    <span class="btn-standard btn-green">Become a Seller</span>
                                </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

      <!-- tav -->

        <div class="col-md-7 align-self-start mt-4 pt-3">
            <div class="row mx-0" >
                <div class=" border" style="background-color:#f7f7f7;">
                    <label class="text-center me-2" id="active-gigs">Active gigs</label>
                    <label class="text-center ms-2" id="drafts">Drafts</label>
                </div>
            </div>

            <div class="row mt-5" id="for_gigs" >
                <div class="col-md-4">
                    <div class="gig_card border container">
                        <div class="row h-100">
                            <div class="col ">
                                <div class="rounded-circle text-center d-flex justify-content-center mx-auto">
                                    <i class="fa fa-plus align-self-center" id="cam_icon" style="font-size:36px; color:#f7f7f7;"></i>
                                </div>
                                <p class="text-center mt-4 fw-bold" style="font-size:20px;">Create a new Gig</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
 
            </div>  
            <div class="row mt-5" id="for_drafts" style="display:none;">

                <?php for($i=1; $i<=2; $i++ ): ?>
                <div class="col-md-4 my-3">
                    <div class="gig_card border">
                        <div>
                            <img src="<?php echo e(asset('image.png')); ?>" class="gig_image" />
                        </div>
                        <p class="gig_title px-3 pt-3"><?php echo e($i); ?> will be your web designer</p>
                        <div class="text-end px-3 align-self-end">
                            <span class="text-uppercase" style="font-size:15px;color:#1dbf73">Starting at </span>
                            <span class="fw-bold" style="font-size:24px; color:#1dbf73">$<?php echo e($i); ?>0</span>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>

                <div class="col-md-4">
                    <div class="gig_card border container">
                        <div class="row h-100">
                            <div class="col ">
                                <div class="rounded-circle text-center d-flex justify-content-center mx-auto">
                                    <i class="fa fa-plus align-self-center" id="cam_icon" style="font-size:36px; color:#f7f7f7;"></i>
                                </div>
                                <p class="text-center mt-4 fw-bold" style="font-size:20px;">Create a new Gig</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>         
        </div>

    <!-- tab emd -->

      
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/profile.js')); ?>"></script>
<script>
    $(document).ready(function() {
        // When clicking on "Active gigs", show the corresponding section and hide "Drafts"
        $('#active-gigs').on('click', function() {
            $('#for_gigs').show();
            $('#for_drafts').hide();
            
            $(this).css('color','black');
            $('#drafts').css('color','#1dbf73');
            $(this).css('border-bottom','6px solid #1dbf73');
            $('#drafts').css('border-bottom','6px solid #f7f7f7');
        });

        // When clicking on "Drafts", show the corresponding section and hide "Active gigs"
        $('#drafts').on('click', function() {
            $('#for_drafts').show();
            $('#for_gigs').hide();
      
            $(this).css('color','black');
            $('#active-gigs').css('color','#1dbf73');
            $(this).css('border-bottom','6px solid #1dbf73');
            $('#active-gigs').css('border-bottom','6px solid #f7f7f7');
        });
    });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Shahidur project\project\miver\resources\views/pages/user/profile.blade.php ENDPATH**/ ?>