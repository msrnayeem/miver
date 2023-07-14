<?php $__env->startSection('title', 'Miverr - Home'); ?>


<?php $__env->startSection('content'); ?>
<style>
.profile-card {
  background-color: #f5f5f5;
  padding: 20px;
  text-align: center;
  max-width: 300px;
  margin: 0 auto;
  
}

.top-section {
  position: relative;
}

.avatar-wrapper {
  position: relative;
  display: inline-block;
}

.avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin-bottom: 20px;
}

.edit-icon {
  position: absolute;
  bottom: 0;
  right: 0;
  background-color: #fff;
  padding: 5px;
  cursor: pointer;
  border-radius: 50%;
  font-size: 14px;
}

.bottom-section {
  text-align: left;
}

.hidden {
  display: none;
}

.edit-name input,
.edit-description input {
  width: 100%;
  margin-bottom: 10px;
}

.edit-buttons {
  margin-top: 10px;
}

.update-button,
.cancel-button {
  background-color: #4caf50;
  color: #fff;
  border: none;
  padding: 8px 16px;
  cursor: pointer;
  margin-right: 5px;
}

.update-button:hover,
.cancel-button:hover {
  background-color: #45a049;
}

.location-section {
  margin-top: 20px;
  display: flex;
  align-items: center;
}

.location-section .location {
  margin-right: 10px;
}




</style>
<!-- <form method="POST"  action="<?php echo e(route('profilePic')); ?>"  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="file" name="image">
                <button type="submit">Upload</button>
            </form> -->
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



    <!-- <h1>Welcome to the Profile Page</h1>
    <form method="POST"  action="<?php echo e(route('profilePic')); ?>"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form> -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>// JavaScript functions for edit functionality
// JavaScript functions for edit functionality
  // Wait for the document to be ready
  $(document).ready(function() {
    // Add click event listener to the edit icon
    $("#edit-icon").click(function() {
      // Hide the name and show the edit-name section
      $("#name").hide();
      $("#edit-name").removeClass("hidden");
      $("#edit-buttons").removeClass("hidden");
      
      
    });

    // Add click event listener to the cancel button
    $("#cancel-button").click(function() {
      // Show the name and hide the edit-name section
      $("#name").show();
      $("#edit-name").addClass("hidden");
    });

    // Add click event listener to the update button
    $("#update-button").click(function() {
      // Update the name with the value from the input field
      var newName = $("#name-input").val();
      $("#name").text(newName);

      // Show the name and hide the edit-name section
      $("#name").show();
      $("#edit-name").addClass("hidden");
    });
  });
  // Edit description icon click event
  $("#edit-description-icon").click(function() {
      // Hide the description and show the edit-description section
      $("#description").hide();
      $("#edit-description").removeClass("hidden");
    });

    // Cancel button click event
    $("#cancel-description-button").click(function() {
      // Show the description and hide the edit-description section
      $("#description").show();
      $("#edit-description").addClass("hidden");
    });

    // Update button click event
    $("#update-description-button").click(function() {
      // Update the description with the value from the input field
      var newDescription = $("#description-input").val();
      $("#description").text(newDescription);

      // Show the description and hide the edit-description section
      $("#description").show();
      $("#edit-description").addClass("hidden");
    });

</script>
    

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/profile.blade.php ENDPATH**/ ?>