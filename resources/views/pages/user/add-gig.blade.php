@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}">
 
@endpush
@section('content')

<div class="container">
    
    <div class="row mb-4 mt-4">
        <div class="col-md-12">
            <h1>Personal Information</h1>
        </div>
    </div>
    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="full_name">Full Name</label>
        </div>
        <div class="col-md-6">
            <input type="text" id="full_name" name="full_name" class="form-control">
        </div>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="display_name">Display Name</label>
        </div>
        <div class="col-md-6">
            <input type="text" id="display_name" name="display_name" class="form-control">
        </div>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="phone">Phone</label>
        </div>
        <div class="col-md-6">
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="profile_pic">Profile Picture</label>
        </div>
        <div class="col-md-6">
            <input type="file" id="profile_pic" name="profile_pic" class="form-control-file">
        </div>
    </div>

    <div class="row mb-4 mt-4"> <!-- Added mb-4 class to add bottom margin -->
        <div class="col-md-4">
            <label for="description">Description</label>
        </div>
        <div class="col-md-6">
            <textarea id="description" name="description" class="form-control" rows="4"></textarea>
        </div>
    </div>

    <div class="row mb-4 mt-4">
        <div class="col-md-4">
            <label for="language">Language</label>
        </div>
        <div class="col-md-6">
            <select id="language" name="language" class="form-control">
                <option value="english">English</option>
                <option value="bangla">Bangla</option>
                <option value="hindi">Hindi</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
            </select>
        </div>
    </div>

    <div class="row mb-4 mt-4">
    <a href="{{ route('seller.professional.info') }}"><span class="btn btn-info">Continue</span></a>
    </div>
</div>




@endsection

@push('scripts')
<script src="{{ asset('') }}"></script>
@endpush