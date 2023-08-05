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
                    @if($type == 'seller')
                        <div class="card-body">
                            <h5 class="card-title" style=" text-transform: capitalize;">Buyer information</h5>
                            <!-- Add buyer information here -->
                            <!-- For example: -->
                            <p>Name: {{ $order->buyer->name}}</p>
                            <p>Email: {{ $order->buyer->email}}</p>
                            
                            <a href="#" class="btn btn-primary btn-sm">Message Now</a>
                        </div>
                    @else
                        <div class="card-body">
                            <h5 class="card-title" style=" text-transform: capitalize;">Seller information</h5>
                            <!-- Add buyer information here -->
                            <!-- For example: -->
                            <p>Name: {{ $order->seller->name}}</p>
                            <p>Email: {{ $order->seller->email}}</p>
                            <a href="#" class="btn btn-primary btn-sm">Message Now</a>
                        </div>
                    @endif
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