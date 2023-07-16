<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/allProduct.css')); ?>">


<?php $__env->startSection('content'); ?>


<!-- categories -->

<div class="CategoryContainer">
  <form id="filter-form" action="<?php echo e(route('allProduct')); ?>" method="GET">
    <div class="filter-section">
      <div class="category-select" style="margin-top: -10px;">
        <!-- Category select content goes here -->
        <label for="category">Category:</label>
        <select id="category" name="category">
          <option value="">All</option> <!-- Add an option for all categories -->
          <option value="49">Option 1</option>
          <option value="49">Option 2</option>
          <option value="49">Option 3</option>
        </select>
      </div>
      <div class="price-slider">
        <!-- Price slider content goes here -->
        <label for="price-range">Price Range:</label>
        <input type="range" id="price-range" name="price-range" min="0" max="30" value="<?php echo e(request('price-range', 0)); ?>">
        <span id="price-value"><?php echo e(request('price-range', 0)); ?></span>
      </div>
      <div class="days-slider">
        <!-- Days slider content goes here -->
        <label for="days-range">Days Range:</label>
        <input type="range" id="days-range" name="days-range" min="0" max="30" value="<?php echo e(request('days-range', 0)); ?>">
        <span id="days-value"><?php echo e(request('days-range', 0)); ?></span>
      </div>
      <div class="button-section">
        <!-- Button section content goes here -->
        <button type="submit" class="btn btn-outline-primary btn-sm">Apply Filters</button>
        <button type="button" class="btn btn-outline-primary btn-sm" onclick="resetFilters()">Reset Filters</button>
      </div>
      <p class="text-center">Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> 
        of <?php echo e($products->total()); ?> Gigs</p>
    </div>
    
  </form>

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
     <p> <?php echo e($products->links('vendor.pagination.bootstrap-4')); ?></p>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
  function resetFilters() {
    // Reset the form and reload the page
    document.getElementById("filter-form").reset();
    window.location.href = "<?php echo e(route('allProduct')); ?>";
  }

  // Price range slider
  var priceRange = document.getElementById("price-range");
  var priceValue = document.getElementById("price-value");

  priceRange.addEventListener("input", function() {
    priceValue.textContent = priceRange.value;
  });

  // Days range slider
  var daysRange = document.getElementById("days-range");
  var daysValue = document.getElementById("days-value");

  daysRange.addEventListener("input", function() {
    daysValue.textContent = daysRange.value;
  });
</script>




<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/product/allProduct.blade.php ENDPATH**/ ?>