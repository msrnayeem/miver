<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/allProduct.css')); ?>">


<?php $__env->startSection('content'); ?>


<!-- categories -->
<div class="CategoryContainer">
    
    
    <div class="categories">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card">
          <img src="<?php echo e(asset('image.png')); ?>" alt="<?php echo e($product->name); ?>">

              <div class="user-section">
                <div class="user-icon">
                    <img src="<?php echo e(asset('image.png')); ?>" alt="User Icon" class="user-image">
                </div>
                <div class="user-name">
                <?php echo e($product->user->username); ?>

                </div>
            </div>
              <h3><a href="<?php echo e(route('singleProduct', ['id' => $product->id])); ?>"><?php echo e($product->name); ?></a></h3>
              <h4><?php echo e($product->price); ?></h4>
              <p><?php echo e($product->details); ?></p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="pagination">
      <p>Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> products
         <?php echo e($products->links('vendor.pagination.bootstrap-4')); ?></p>
      
    </div>
</div>

<!-- category -->







<!-- faq -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/product/allProduct.blade.php ENDPATH**/ ?>