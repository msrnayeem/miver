@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
 
@endpush
@section('content')


  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-6">
        <!-- Basic Row -->
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Basic</h4>
            <!-- First Row inside Basic -->
            <div class="row">
              <div class="col-md-6">
                <label for="basicName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="basicName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Basic -->
            <div class="row">
              <div class="col-md-6">
                <label for="basicDescription">Description:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="basicDescription" class="form-control" placeholder="Enter Description">
              </div>
            </div>
            <!-- Third Row inside Basic -->
            <div class="row">
              <div class="col-md-6">
                <label for="basicTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="basicTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>

        <!-- Standard Row -->
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Standard</h4>
            <!-- First Row inside Standard -->
            <div class="row">
              <div class="col-md-6">
                <label for="standardName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="standardName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Standard -->
            <div class="row">
              <div class="col-md-6">
                <label for="standardDescription">Description:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="standardDescription" class="form-control" placeholder="Enter Description">
              </div>
            </div>
            <!-- Third Row inside Standard -->
            <div class="row">
              <div class="col-md-6">
                <label for="standardTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="standardTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>

        <!-- Premium Row -->
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Premium</h4>
            <!-- First Row inside Premium -->
            <div class="row">
              <div class="col-md-6">
                <label for="premiumName">Name:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="premiumName" class="form-control" placeholder="Enter Name">
              </div>
            </div>
            <!-- Second Row inside Premium -->
            <div class="row">
              <div class="col-md-6">
                <label for="premiumDescription">Description:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="premiumDescription" class="form-control" placeholder="Enter Description">
              </div>
            </div>
            <!-- Third Row inside Premium -->
            <div class="row">
              <div class="col-md-6">
                <label for="premiumTime">Time:</label>
              </div>
              <div class="col-md-6">
                <input type="text" id="premiumTime" class="form-control" placeholder="Enter Time">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <!-- Image Input Field -->
        <div class="row">
          <div class="col-md-6">
            <label for="imageInput">Image:</label>
          </div>
          <div class="col-md-6">
            <input type="file" id="imageInput" class="form-control-file">
          </div>
        </div>
         
      </div>

    </div>
    <div class="row my-2 py-2 text-end">
          <a href="{{ route('profile') }}"><span class="btn btn" style="background-color:#1dbf73; color:white; padding-inline:40px">Save</span></a>
    </div> 
  </div>

 

@endsection

@push('scripts')
<script src="{{ asset('') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap CSS (make sure to include the Bootstrap CSS in your HTML) -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush