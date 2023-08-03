@extends('layouts.default')

@section('title', 'Miverr - Orders')
@push('styles')

@endpush
@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- Left column for buyer information -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Buyer Information</h5>
                        <!-- Add buyer information here -->
                        <!-- For example: -->
                        <p>Name: {{ $order->buyer->name}}</p>
                        <p>Email: {{ $order->buyer->email}}</p>
                        <!-- Add more buyer information as needed -->
                    </div>
                </div>
            </div>
            
            <!-- Right column for order information -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Information</h5>
                        <p>Order ID: {{ $order->order_id}}</p>
                        <p>Order Date: {{ $order->created_at->format('M d, y') }}</p>
                        <p>Order Status: {{ $order->order_status}}</p>
                        <p>Service: {{ $order->gig->gig_title}}</p>
                        <p>Price: {{ $order->price}}</p>
                        <p>Delivery Date: {{ $order->delivery_date ? $order->delivery_date->format('M d, y') : null  }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush