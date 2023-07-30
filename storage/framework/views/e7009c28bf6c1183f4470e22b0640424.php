<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">
    <style>
    .container{
        font: 400 16px/24px "Macan","Helvetica Neue",Helvetica,Arial,sans-serif;
    }
    .imageContainer {
        position: relative;
    }
    .image{
        object-fit: cover;
        background-repeat: no-repeat;
        cursor: pointer;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 57px;
        transform: translate(0%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        cursor: pointer;
    }
    .imageContainer:hover .image {
        opacity: 0.3;
    }

    .imageContainer:hover .middle {
        opacity: 1;
    }

    .header_name{
        font-size:18px;
    }

    </style>
 
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    
    <header class="step-header pt-4">
        <h2 class="fw-bold my-3" style="color:#62646a;">Personal Info</h2>
        <p class="mb-0" style="max-Width: 475px; color: #95979d;font-weight:600;font-size:15px">Tell us a bit about yourself. This information will appear on your public profile, so that potential buyers can get to know you better.</p>
        <p class="text-end fst-italic" style="color: #95979d;font-weight:600;">* Mandatory fields</p>
    </header>

    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="full_name" class="header_name">Full Name <span class="text-danger">*</span><span class="fst-italic ps-2" style="color: #95979d;"> Private</span></label>
        </div>
        <div class="col-md-8 d-flex">
            
                <input type="text" id="first_name" name="first_name" class="form-control">
           
            
        </div>
    </div>

    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="display_name" class="header_name">Display Name <span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-8">
            <div class="col-md-4">
                <input type="text" id="display_name" name="display_name" class="form-control">
            </div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
        </div>
    </div>

    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="display_name" class="header_name">Phone <span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-8">
            <div class="col-md-4">
                <input type="text" id="phone" name="phone" class="form-control">
            </div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
        </div>
    </div>
    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="profession" class="header_name">Profession<span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-8">
            <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" name="profession" id="profession">
                    <option selected>Select Profession</option>
                    <option value="1">Web Developer</option>
                    <option value="2">Web Designer</option>
                    <option value="3">Graphic Designer</option>
                </select>
            </div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
            <div class="col-md-4 .d-sm-none .d-md-block"></div>
        </div>
    </div>

    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="profile_pic" class="header_name">Profile Picture <span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-8">

            <div class="imageContainer" title="Profile Picture" >
                <img src="<?php echo e(asset('uploads/'.$userId.'.jpg')); ?>" class="rounded-circle shadow-4-strong image" id="image" height="150" width="150" />
                <input type="file" id="myfile" style="display: none;"/>
                <div class="middle" >
                    <i class="fa fa-camera" id="cam_icon" style="font-size:36px; color:black;"></i>
                </div>
            </div>

        </div>
    </div>

    <div class="row my-5 py-5"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="description" class="header_name">Description <span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-8">
            <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>
    </div>

    <div class="row my-5 py-5">
        <div class="col-md-4">
            <label for="language" class="header_name">Language <span class="text-danger">*</span> </label>
        </div>
        <div class="col-md-6">
            <select id="language" name="language" class="form-control">
                <option value="english">English</option>
                <option value="bangla">Bangla</option>
                <option value="hindi">Hindi</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
            </select>
        </div>
    </div>

    <div class="row my-2 py-2 text-end">
        <a href="<?php echo e(route('user.add.gig')); ?>"><span class="btn btn" style="background-color:#1dbf73; color:white; padding-inline:40px">Continue</span></a>
    </div>
</div>


<style>
    .step-header {
    border-bottom: 1px solid #e4e5e7;
}
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('')); ?>"></script>
<script src="<?php echo e(asset('js/profile.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#image').click(function(){
        $('#myfile').click()
    })
    $('#cam_icon').click(function(){
        $('#myfile').click()
    })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Shahidur project\project\miver\resources\views/pages/user/personal-info.blade.php ENDPATH**/ ?>