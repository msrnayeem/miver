@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/digitalmarketing.css') }}">


@section('content')
<!-- top banner -->

<div class="CategoryBanner">
    <img src="{{ asset('assets/images/category/videoAnimation.png') }}" alt="videoAnimation">
    <div class="text-overlay">
    Video & Animation
        <div class="subtext">
        Bring your story to life with creative videos.
        </div>
    </div>
</div>
<!-- top banner end -->


<!-- categories -->
<div class="CategoryContainer">
    <h3>Explore Writing & Translation</h3>
    <div class="categories">
        <div class="card">
            <img src="{{ asset('assets/images/category/logo.png') }}" alt="Logo & Brand Identity">
            <h3>Logo & Brand Identity</h3>
            <ul>
                <li><a href="#">Logo design</a></li>
                <li><a href="#">Brand style guides</a></li>
                <li><a href="#">Fonts and typography</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/webapp.png') }}" alt="Web & App Design">
            <h3>Web & App Design</h3>
            <ul>
                <li><a href="#">Website Design</a></li>
                <li><a href="#">App design</a></li>
                <li><a href="#">UI/UX design</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/Art _ Illustration.png') }}" alt="Art _ Illustration">
            <h3>Art & Illustration</h3>
            <ul>
                <li><a href="#">Illustration</a></li>
                <li><a href="#">AI Artists</a></li>
                <li><a href="#">Cartoons & Comics</a></li>
            </ul>
        </div>
        
        
    </div>
</div>

<!-- category -->



<!-- guides -->
<div class="GuideContainer">
    <h3>Digital Marketing Related Guides</h3>
    <div class="categories">
        <div class="card">
            <img src="{{ asset('assets/images/category/whatIsMarketing.jpg') }}" alt="search">
            <div class="guide-content">
                <a href="" class="guide-description">What is Marketing?</a>
            </div>
            
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/promote.jpg') }}" alt="social">
            <div class="guide-content">
                <a href="" class="guide-description">15 ways to promote your business online</a>
            </div>
        </div>
        
        
    </div>
</div>
<!-- guide end -->



<!-- faq -->

<div class="digital-marketing-faqs">
    <h3 >Digital Marketing FAQs</h3>
    <div class="faq">
        <input type="checkbox" id="faq1" />
        <label for="faq1">What is digital marketing?</label>
        
        <div class="faq-content">
            <p>By definition digital marketing (aka online marketing) promotes a client’s brand, products and services via the internet or other digital channels. A digital marketing campaign is typically delivered via an electronic device, such as computer, tablet</p>
        </div>
    </div>
    <hr >
    <div class="faq">
        <input type="checkbox" id="faq2" />
        <label for="faq2">What does a digital marketer do?</label>
        <div class="faq-content">
            <p>A digital marketer finds creative solutions to drive brand awareness and lead generation via free or paid digital channels, including email, search engines, social media, the company’s website and blog. The exact mix will depend on the client’s specific needs</p>
        </div>
    </div>
    <hr>
    <!-- Add other FAQs following the same structure -->
</div>

<!-- faq -->

@endsection

@push('scripts')
    <script src="{{ asset('') }}"></script>
    

@endpush