@extends('layouts.default')

@section('title', 'Miverr - Home')


@section('content')
    <h1>Welcome to the Profile Page</h1>
    <form method="POST"  action="{{ route('profilePic') }}"  enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <button type="submit">Upload</button>
    </form>

@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
    

@endpush