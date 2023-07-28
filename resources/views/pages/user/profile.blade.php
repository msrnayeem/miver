@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/profile.css') }}">
@endpush
@section('content')

<div class="profile-card">
    <div class="top-section">
        <div class="avatar-wrapper">
            <img src="{{ asset('uploads/'.$user->id.'.jpg') }}" alt="User Avatar" class="avatar">
            <span class="edit-icon"><i class="fas fa-pencil-alt"></i></span>
        </div>
    </div>
    <div class="bottom-section">
        <h3>
            <span id="name" style="text-decoration: underline; cursor: pointer;">{{ $user->username }}</span>
                <i id="edit-icon" class="fas fa-pencil-alt fa-xs" style="cursor: pointer;"></i>

            <span id="edit-name" class="edit-name hidden">
                <input type="text" id="name-input" value="{{ $user->username }}">
                <div class="edit-buttons">
                <button class="btn btn-sm btn-primary rounded" id="update-button">Update</button>
                <button class="btn btn-sm btn-primary rounded" id="cancel-button">Cancel</button>
                </div>
            </span>
        </h3>
        <h3>
            <span id="description" style="cursor: default;">{{ $user->profile_info }}</span>
            <i id="edit-description-icon" class="fas fa-pencil-alt fa-xs" style="cursor: pointer;"></i>

            <span id="edit-description" class="edit-description hidden" >
                <input type="text" id="description-input" value="{{ $user->profile_info }}">
                <div class="edit-buttons">
                <button class="btn btn-sm btn-primary rounded" id="update-description-button">Update</button>
                <button class="btn btn-sm btn-primary rounded" id="cancel-description-button">Cancel</button>
                </div>
            </span>
        </h3>

        <div class="location-section" style="cursor: default;">
            <span class="location">Bangladesh</span>
            <span class="joining-date">Joined on {{ $user->created_at }}</span>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
@endpush