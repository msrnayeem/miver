@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/allProduct.css') }}">


@section('content')


<!-- categories -->
<div class="CategoryContainer">
    
    
    <div class="categories">
        @foreach($products as $product)
          <div class="card">
          <img src="{{ asset('image.png') }}" alt="{{ $product->name }}">

              <div class="user-section">
                <div class="user-icon">
                    <img src="{{ asset('image.png') }}" alt="User Icon" class="user-image">
                </div>
                <div class="user-name">
                {{ $product->user->username }}
                </div>
            </div>
              <h3><a href="{{ route('singleProduct', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
              <h4>{{ $product->price }}</h4>
              <p>{{ $product->details }}</p>
          </div>
        @endforeach
    </div>
    
    <div class="pagination">
      <p>Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }} products
         {{ $products->links('vendor.pagination.bootstrap-4') }}</p>
      
    </div>
</div>

<!-- category -->







<!-- faq -->

@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
@endpush