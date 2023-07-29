

<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">
 
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <br><br>
    <!-- main row 1 -->
    <div class="row">
        <!-- First Column (size 4) -->
        <div class="col-md-4">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-12">Git Title</div>
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-12">
                    As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
                </div>
            </div>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" placeholder="Enter your text here"></textarea>     
                </div>
            </div>
        </div>
    </div>
    <!-- main row 1 complete -->

    <br><br>
    <!-- main row 2 -->
    <div class="row">
        <!-- First Column (size 4) -->
        <div class="col-md-4">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-12">Category</div>
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-12">
                Choose the category and sub-category most suitable for your Gig.
                </div>
            </div>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-6">
                    <select id="category" name="category" class="form-control">
                        <option value="">Select a categoryy</option>
                        <option value="graphics-design">Graphics Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="programming-tech">Programming & tech</option>
                        <option value="video-animation">Video &Animation</option>
                        <option value="photography">Photography</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="sub_category">
                        <option value="">Select a sub-category</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"> </div>
                <br>
                <br>
                <div class="col-md-6" id="service_type_wrapper" style="display: none;">
                    <select class="form-control" id="service_type">
                        <option value="">Select service type</option>
                        <option value="basic">Basic</option>
                        <option value="standard">Standard</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- main row 2 complete -->

    <br><br>
    <!-- main row 3 -->
    <div class="row">
        <!-- First Column (size 4) -->
        <div class="col-md-4">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-12">Search Keywords</div>
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-12">
                         Tag your Gig with buzz words that are relevant to the services you offer.
                          Use all 5 tags to get found.
                </div>
            </div>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" placeholder="Enter your text here"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- main row 3 complete -->

    <br><br>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary">Save & Continue</button>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('')); ?>"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap CSS (make sure to include the Bootstrap CSS in your HTML) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script>
    $(document).ready(function() {
        $('#category').on('change', function() {
            
            var selectedCategory = $(this).val();
            var selectElement = document.getElementById('sub_category');

            if (selectedCategory !== '') {
                $.ajax({
                    url: '/getCategoriesDetails', 
                    type: 'GET',
                    data: { 
                        category: selectedCategory,
                        info: 'sub_category'
                     },
                    success: function(response) {
                        selectElement.innerHTML = '';

                        response.forEach(function(subCategory) {
                        var option = document.createElement('option');
                        option.value = subCategory.id; 
                        option.textContent = subCategory.name; 
                        selectElement.appendChild(option); 
                        });
                    },
                    error: function() {
                        console.log('Error occured');
                    }
                });
            } 
        });
        $("#sub_category").change(function() {
            var subCategorySelected = $(this).val();
            if (subCategorySelected !== "") {
                $("#service_type_wrapper").show();
            } else {
                $("#service_type_wrapper").hide();
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/add-gig.blade.php ENDPATH**/ ?>