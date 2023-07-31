<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/category.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/digitalmarketing.css')); ?>">


<?php $__env->startSection('content'); ?>
<!-- top banner -->

<div class="CategoryBanner">
    <img src="<?php echo e(asset('assets/images/category/'.$category->id.'.png')); ?>" alt="digital marketing">
    <div class="text-overlay">
    <?php echo e($category->name); ?>

        <div class="subtext">
        <?php echo e($category->bannertext); ?>

        </div>
    </div>
</div>
<!-- top banner end -->


<!-- categories -->
<div class="CategoryContainer">
    <h3>Explore <?php echo e($category->name); ?></h3>
    <div class="categories">
        <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
        <img src="<?php echo e(asset('assets/images/' . $category->bannerImageLink . '/' . $subCategory->imageName)); ?>" alt="<?php echo e($category->name); ?>">
            <h3><?php echo e($subCategory->name); ?></h3>
            <ul>
                <?php $__currentLoopData = $subCategory->subSubCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('all.gigs')); ?>"><?php echo e($subSubCategory->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<!-- category -->



<!-- guides -->
<div class="GuideContainer">
    <h3><?php echo e($category->name); ?> Related Guides</h3>
    <div class="categories">
        <?php if(!$category->guides->isEmpty()): ?>
            
            <?php
                $counter = 1;
            ?>

            <?php $__currentLoopData = $category->guides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    // Convert the counter to a two-digit string with leading zeros
                    $idd = str_pad($counter, 2, '0', STR_PAD_LEFT);
                    $counter++; // Increment the counter for the next iteration
                ?>

            <div class="card">
            <img src="<?php echo e(asset('assets/images/' . $category->bannerImageLink . '/' .$idd. '.jpg')); ?>" alt="Logo & Brand Identity">
                <div class="guide-content">
                    <a href="" class="guide-description"><?php echo e($guide->title); ?></a>
                </div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p>No guides found.</p>
        <?php endif; ?>
    </div>
</div>
<!-- guide end -->



<!-- faq -->

<div class="digital-marketing-faqs">
    <h3 ><?php echo e($category->name); ?> FAQs</h3>
    <?php if(!$category->faqs->isEmpty()): ?>
        <?php $__currentLoopData = $category->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="faq">
            <input type="checkbox" id="faq1" />
            <label for="faq1"> <?php echo e($faq->title); ?></label>
            
            <div class="faq-content">
                <p> <?php echo e($faq->faqs); ?></p>
            </div>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No FAQs found.</p>
    <?php endif; ?>

</div>

<!-- faq -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/category/categoryMaster.blade.php ENDPATH**/ ?>