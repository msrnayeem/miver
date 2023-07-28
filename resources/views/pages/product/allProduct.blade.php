@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/allProduct.css') }}">


@section('content')


<!-- categories -->

<div class="CategoryContainer">
  <form id="filter-form" action="{{ route('allProduct') }}" method="GET">
    <div class="filter-section">
      <div class="category-select" style="margin-top: -10px;">
        <!-- Category select content goes here -->
        <label for="category">Category:</label>
        <select id="category" name="category">
          <option value="">All</option> <!-- Add an option for all categories -->
          <option value="49">Option 1</option>
          <option value="49">Option 2</option>
          <option value="49">Option 3</option>
        </select>
      </div>
      <div class="price-slider">
        <!-- Price slider content goes here -->
        <label for="price-range">Price Range:</label>
        <input type="range" id="price-range" name="price-range" min="0" max="30" value="{{ request('price-range', 0) }}">
        <span id="price-value">{{ request('price-range', 0) }}</span>
      </div>
      <div class="days-slider">
        <!-- Days slider content goes here -->
        <label for="days-range">Days Range:</label>
        <input type="range" id="days-range" name="days-range" min="0" max="30" value="{{ request('days-range', 0) }}">
        <span id="days-value">{{ request('days-range', 0) }}</span>
      </div>
      <div class="button-section">
        <!-- Button section content goes here -->
        <button type="submit" class="btn btn-outline-primary btn-sm">Apply Filters</button>
        <button type="button" class="btn btn-outline-primary btn-sm" onclick="resetFilters()">Reset Filters</button>
      </div>
      <p class="text-center">Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} 
        of {{ $products->total() }} Gigs</p>
    </div>
    
  </form>

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
     <p> {{ $products->links('vendor.pagination.bootstrap-4') }}</p>
  </div>
</div>
@endsection

@push('scripts')
<script>
  function resetFilters() {
    // Reset the form and reload the page
    document.getElementById("filter-form").reset();
    window.location.href = "{{ route('allProduct') }}";
  }

  // Price range slider
  var priceRange = document.getElementById("price-range");
  var priceValue = document.getElementById("price-value");

  priceRange.addEventListener("input", function() {
    priceValue.textContent = priceRange.value;
  });

  // Days range slider
  var daysRange = document.getElementById("days-range");
  var daysValue = document.getElementById("days-value");

  daysRange.addEventListener("input", function() {
    daysValue.textContent = daysRange.value;
  });
</script>




@endpush