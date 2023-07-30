<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">

    <style>
        .lebel{
            font-size: 20px;
            margin-bottom: 10px;
        }
    </style>
 
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    
    <br><br>
    <!-- main row 1 -->
    <div class="row">
        <!-- First Column (size 4) -->
        <div class="col-md-4">
            <!-- Row 1 -->
            <p class=" lebel fw-bold">Git Title</p>
            
            <!-- Row 2 -->
            <p class="mb-0">As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.</p>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <textarea class="form-control" placeholder="Enter your text here"></textarea>     
        </div>
    </div>
    <!-- main row 1 complete -->

    <br><br>
    <!-- main row 2 -->
    <div class="row">
        <!-- First Column (size 4) -->
        <div class="col-md-4">
            <!-- Row 1 -->
                <p class="lebel fw-bold">Category</p>
            <!-- Row 2 -->
            
                <p>Choose the category and sub-category most suitable for your Gig.</p>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-6 mb-2">
                    <select id="category" name="category" class="form-control">
                        <option value="">Select a categoryy</option>
                        <option value="graphics-design">Graphics Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="programming-tech">Programming & tech</option>
                        <option value="video-animation">Video &Animation</option>
                        <option value="photography">Photography</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <select class="form-control" id="sub_category">
                        <option value="">Select a sub-category</option>
                    </select>
                </div>
            </div>
            
            <div class="row mb-4 mt-4">
                <div class="col-md-4"></div>
                <div class="col-md-6"  id="checkboxContainer" >
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
            <p class="lebel fw-bold">Search Keywords</p>
            <!-- Row 2 -->
            <p>
                Tag your Gig with buzz words that are relevant to the services you offer.
                Use all 5 tags to get found.
            </p>
        </div>

        <!-- Second Column (size 8) -->
        <div class="col-md-8">
            <!-- Row 1 -->
            <textarea class="form-control" placeholder="Enter your text here"></textarea>
           
        </div>
    </div>
    <!-- main row 3 complete -->

    <br><br>
    
    <div class="row my-2 py-2 text-end">
        <a href="<?php echo e(route('user.gig.info')); ?>"><span class="btn btn" style="background-color:#1dbf73; color:white; padding-inline:40px">Continue</span></a>
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
                    url: '/getSubCategory', 
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
                $.ajax({
                    url: '/getSubSubCategory', // Replace with your route URL for getCategoryInfo
                    type: 'GET',
                    data: { SubCategory: subCategorySelected },
                    success: function(response) {
                        console.log(response);
                        // Clear the previous content in the checkboxContainer div
                        var checkboxHtml = '<div class="row">';
                        var columnCount = 2; // Number of columns
                        var itemsPerColumn = Math.ceil(response.length / columnCount);
                        
                        for (var i = 0; i < columnCount; i++) {
                            checkboxHtml += '<div class="col-md-6">';
                            for (var j = i * itemsPerColumn; j < (i + 1) * itemsPerColumn && j < response.length; j++) {
                                var subSubCategory = response[j];
                                checkboxHtml += '<div class="form-check">';
                                checkboxHtml += '<input class="form-check-input" type="checkbox" name="sub_sub_category_ids[]" value="' + subSubCategory.id + '">';
                                checkboxHtml += '<label class="form-check-label">' + subSubCategory.name + '</label>';
                                checkboxHtml += '</div>';
                            }
                            checkboxHtml += '</div>';
                        }
                        checkboxHtml += '</div>';

                        // Update the content of #checkboxContainer and show it
                        $('#checkboxContainer').html(checkboxHtml);
                    },
                    error: function() {
                        var errorHtml = '<p>Error fetching sub sub category details.</p>';
                        $('#checkboxContainer').empty();
                        $('#checkboxContainer').html(errorHtml);
                        
                    }
                });
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Shahidur project\project\miver\resources\views/pages/user/add-gig.blade.php ENDPATH**/ ?>