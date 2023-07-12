@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/digitalmarketing.css') }}">


@section('content')
<!-- top banner -->

<div class="CategoryBanner">
    <img src="{{ asset($category->bannerImageLink) }}" alt="digital marketing">
    <div class="text-overlay">
    {{ $category->name }}
        <div class="subtext">
        {{ $category->bannertext }}
        </div>
    </div>
</div>
<!-- top banner end -->


<!-- categories -->
<div class="CategoryContainer">
    <h3>Explore {{ $category->name }}</h3>
    <div class="categories">
        @foreach($category->subCategories as $subCategory)
        <div class="card">
            <img src="{{ $subCategory->imageLink }}" alt="Logo & Brand Identity">
            <h3>{{ $subCategory->name }}</h3>
            <ul>
                @foreach($subCategory->subSubCategories as $subSubCategory)
                <li><a href="#">{{ $subSubCategory->name }}</a></li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>

<!-- category -->



<!-- guides -->
<div class="GuideContainer">
    <h3>{{ $category->name }} Related Guides</h3>
    <div class="categories">
        @if(!$category->guides->isEmpty())
            @foreach($category->guides as $guide)
            <div class="card">
                <img src="{{ $guide->imageLink }}" alt="Logo & Brand Identity">
                <div class="guide-content">
                    <a href="" class="guide-description">{{ $guide->title }}</a>
                </div>
                
            </div>
            @endforeach
        @else
            <p>No guides found.</p>
        @endif
    </div>
</div>
<!-- guide end -->



<!-- faq -->

<div class="digital-marketing-faqs">
    <h3 >{{ $category->name }} FAQs</h3>
    @if(!$category->faqs->isEmpty())
        @foreach ($category->faqs as $faq)
        <div class="faq">
            <input type="checkbox" id="faq1" />
            <label for="faq1"> {{ $faq->title }}</label>
            
            <div class="faq-content">
                <p> {{ $faq->faqs }}</p>
            </div>
        </div>
        <hr>
        @endforeach
    @else
        <p>No FAQs found.</p>
    @endif

</div>

<!-- faq -->

@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
@endpush