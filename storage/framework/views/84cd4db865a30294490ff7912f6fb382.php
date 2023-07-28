<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/profile.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="profile-card">
    <div class="top-section">
        <div class="avatar-wrapper">
            <img src="<?php echo e(asset('uploads/'.$user->id.'.jpg')); ?>" alt="User Avatar" class="avatar">
            <span class="edit-icon"><i class="fas fa-pencil-alt"></i></span>
        </div>
    </div>
    <div class="bottom-section">
        <h3>
            <span id="name" style="text-decoration: underline; cursor: pointer;"><?php echo e($user->username); ?></span>
                <i id="edit-icon" class="fas fa-pencil-alt fa-xs" style="cursor: pointer;"></i>

            <span id="edit-name" class="edit-name hidden">
                <input type="text" id="name-input" value="<?php echo e($user->username); ?>">
                <div class="edit-buttons">
                <button class="btn btn-sm btn-primary rounded" id="update-button">Update</button>
                <button class="btn btn-sm btn-primary rounded" id="cancel-button">Cancel</button>
                </div>
            </span>
        </h3>
        <h3>
            <span id="description" style="cursor: default;"><?php echo e($user->profile_info); ?></span>
            <i id="edit-description-icon" class="fas fa-pencil-alt fa-xs" style="cursor: pointer;"></i>

            <span id="edit-description" class="edit-description hidden" >
                <input type="text" id="description-input" value="<?php echo e($user->profile_info); ?>">
                <div class="edit-buttons">
                <button class="btn btn-sm btn-primary rounded" id="update-description-button">Update</button>
                <button class="btn btn-sm btn-primary rounded" id="cancel-description-button">Cancel</button>
                </div>
            </span>
        </h3>

        <div class="location-section" style="cursor: default;">
            <span class="location">Bangladesh</span>
            <span class="joining-date">Joined on <?php echo e($user->created_at); ?></span>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/profile.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/profile.blade.php ENDPATH**/ ?>