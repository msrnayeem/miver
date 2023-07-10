@extends('layouts.default')

@section('title', 'Miverr - Home')


@section('content')
    <h1>Welcome to the Profile Page</h1>
    @if (session()->has('user_name'))
        <p>Your user name: {{ session('user_name') }}</p>
    @else
        <p>User name not found in session.</p>
    @endif
@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
    

@endpush