@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid "
                       src="{{ asset('uploads/1.jpg') }}"
                       alt="profile pic">
                </div>

                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                <p class="text-muted text-center">{{ $user->is_admin == 1 ? "Admin" : "User" }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#details" data-toggle="tab">Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#editDetails" data-toggle="tab">Edit</a></li>
                  <li class="nav-item"><a class="nav-link" href="#changePassword" data-toggle="tab">Change Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
              
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="alert alert-success alert-dismissible fade d-none" id="ppp" role="alert">
                    <strong id="successMsg"> </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="tab-content">

                <!-- details tab -->
                  <div class="active tab-pane" id="details" style="cursor: default;">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <p class="form-control">{{ $user->name }}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <p class="form-control">{{ $user->email }}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <p class="form-control">Location</p>
                        </div>
                      </div>
                  </div>
                  <!-- /details -->

                <!-- edit details -->
                  <div class="tab-pane" id="editDetails">
                    <form class="form-horizontal" action="{{ route('admin.info.update') }}" method="post">
                        @csrf
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Name" value="{{ $user->name }}" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="location" placeholder="location">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <!-- /edit details -->

                <!-- Change Password -->
                  <div class="tab-pane" id="changePassword">
                        <form class="form-horizontal" action="{{ route('admin.change.password') }}" method="post" id="passwordChangeForm">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="current password" name="currentPassword" id="currentPassword">
                                <span class="text-muted" id="currentPasswordError"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="New password" name="newPassword" id="newPassword">
                                <span class="text-muted" id="newPasswordError"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="confirm password" name="confirmPassword" id="confirmPassword">
                                <span class="text-muted" id="confirmPasswordError"></span>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="button" class="btn btn-danger" id="submitButton">Submit</button>
                                </div>
                            </div>
                        </form>


                  </div>
                  <!-- /Change Password -->
                </div>
                <!-- /.tab-content -->


              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@push('scripts')

<script>
  const form = document.getElementById('passwordChangeForm');
  const submitButton = document.getElementById('submitButton');
  const currentPasswordInput = document.getElementById('currentPassword'); // Add this line
  const newPasswordInput = document.getElementById('newPassword'); // Add this line
  const confirmPasswordInput = document.getElementById('confirmPassword'); // Add this line
  
  submitButton.addEventListener('click', function() {
    if (validateForm()) {
      submitForm();
    }
  });
  
  function validateForm() {
    let isValid = true;

    // Validate each input field
    if (!validateCurrentPassword()) {
      isValid = false;
    }
    if (!validateNewPassword()) {
      isValid = false;
    }
    if (!validateConfirmPassword()) {
      isValid = false;
    }
    
    return isValid;
  }
  
  function validateCurrentPassword() {
    const currentPassword = currentPasswordInput.value;
    const currentPasswordError = document.getElementById('currentPasswordError');
    
    if (currentPassword.trim() === '') {
      currentPasswordError.innerHTML = 'Current password is required.';
      return false;
    } else {
      currentPasswordError.innerHTML = '';
      return true;
    }
  }
  
  function validateNewPassword() {
    const newPassword = newPasswordInput.value;
    const newPasswordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    const newPasswordError = document.getElementById('newPasswordError');

    if (!newPasswordPattern.test(newPassword)) {
      newPasswordError.innerHTML = 'at least 6 characters and at least one letter and one number.';
      return false;
    } else {
      newPasswordError.innerHTML = '';
      return true;
    }
  }
  
  function validateConfirmPassword() {
    const newPassword = newPasswordInput.value;
    const confirmPassword = confirmPasswordInput.value;
    const confirmPasswordError = document.getElementById('confirmPasswordError');

    if (newPassword !== confirmPassword) {
      confirmPasswordError.innerHTML = 'Passwords do not match.';
      return false;
    } else {
      confirmPasswordError.innerHTML = '';
      return true;
    }
  }

  function submitForm() {
      const formData = $('#passwordChangeForm').serialize();

      $.ajax({
        type: 'POST',
        url: $('#passwordChangeForm').attr('action'),
        data: formData,
        dataType: 'json',
        success: function(data) {
            if(data.status == 'success'){ 
                $('#passwordChangeForm')[0].reset();
            }
            $('#successMsg').text(data.message);
            $('#ppp').removeClass('d-none');
            $('#ppp').addClass('show'); 
        },
        error: function(xhr, textStatus, errorThrown) {
         
          console.error('Error:', errorThrown);
          
            $('#successMsg').text(errorThrown);
            $('#ppp').removeClass('d-none');
            $('#ppp').addClass('show'); 
        }
      });
    }
</script>
@endpush