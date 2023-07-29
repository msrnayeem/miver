<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">
    <style>
    .step-header {
        border-bottom: 1px solid #e4e5e7;
    }
    </style>
 
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

<div class="container px-0">
    
    <header class="step-header pt-4">
        <h2 class="fw-bold my-3" style="color:#62646a;">Professional Info</h2>
    </header>
    <p class="text-end fst-italic" style="color: #95979d;font-weight:600;">* Mandatory fields</p>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-md-4">
                <label for="category">Your Occupation</label>
            </div>
            
            <div class="col-md-6">
                <select id="category" name="category" class="form-control">
                    <option value="">Select an occupation</option>
                    <option value="graphics-design">Graphics Design</option>
                    <option value="digital-marketing">Digital Marketing</option>
                    <option value="programming-tech">Programming & tech</option>
                    <option value="video-animation">Video &Animation</option>
                    <option value="photography">Photography</option>
                </select>
            </div>

        </div>
        <div class="row mb-4 mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-6"  id="checkboxContainer" style="display: none;">
            </div>      

        </div>
    </div>


    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-2">
            <label for="skill">Your skill</label>
        </div>
        
        <div class="col-md-4">
            <label for="skill">Select a skill</label>
            <select id="skill" name="skill" class="form-control">
            </select>
        </div>
        <div class="col-md-2">
            <label for="skill_level">Your skill level</label>
            <select id="skill_level" name="skill_level" class="form-control">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="expert">Expert</option>
            </select>
        </div>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-2">
            <label for="education">Your Education</label>
        </div>
        
        <div class="col-md-4">
            <label for="education">Degree</label>
            <select id="education" name="education" class="form-control">
                <option value="bachelor">Bachelor</option>
                <option value="master">Master</option>
                <option value="phd">PhD</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="subject">Subject</label>
            <select id="subject" name="subject" class="form-control">
                <option value="cse">CSE</option>
                <option value="it">IT</option>
                <option value="math">Math</option>
            </select>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="personal_web">Personal Website</label>
        </div>
        <div class="col-md-6">
            <input type="text" id="personal_web" name="personal_web" class="form-control"></input>
        </div>
    </div>

    <div class="row mb-4 mt-4">
    <a href="<?php echo e(route('user.add.gig')); ?>"><span class="btn btn-info">Finish</span></a>
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
            if (selectedCategory !== '') {
                $.ajax({
                    url: '/getCategoriesDetails', // Replace with your route URL for getCategoryInfo
                    type: 'GET',
                    data: { category: selectedCategory },
                    success: function(response) {
                        console.log(response); // Display the response in the console

                        // Generate HTML for checkboxes in 3 columns
                        var checkboxHtml = '<div class="row">';
                        var columnCount = 3; // Number of columns
                        var itemsPerColumn = Math.ceil(response.length / columnCount);

                        for (var i = 0; i < columnCount; i++) {
                            checkboxHtml += '<div class="col-md-4">';
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
                        $('#checkboxContainer').show();

                         // Populate "Your skill" select dropdown
                         var skillSelectOptions = '';
                        $.each(response, function(index, subSubCategory) {
                            skillSelectOptions += '<option value="' + subSubCategory.name + '">' + subSubCategory.name + '</option>';
                        });

                        $('#skill').html(skillSelectOptions);
                    },
                    error: function() {
                        var errorHtml = '<p>Error fetching category details.</p>';
                        $('#checkboxContainer').html(errorHtml);
                        $('#checkboxContainer').show();
                    }
                });
            } else {
                $('#checkboxContainer').hide();
            }
        });
    });
</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Shahidur project\project\miver\resources\views/pages/user/professional-info.blade.php ENDPATH**/ ?>