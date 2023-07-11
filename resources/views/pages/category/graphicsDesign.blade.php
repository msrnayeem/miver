@extends('layouts.default')

@section('title', 'Miverr - Home')


@section('content')
<!-- top banner -->
<style>
    .container {
        position: relative;
        display: inline-block;
        max-width: 100%;
        margin-top: 10px;
    }

    .container img {
        max-width: 100%;
        height: auto;
    }

    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-family: 'Macan', 'Helvetica Neue', Helvetica, Arial, sans-serif;

        font-size: 24px;
        font-weight: bold;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
    }

    .subtext {
        font-family: 'Macan', 'Helvetica Neue', Helvetica, Arial, sans-serif;

        font-size: 14px;
        margin-top: 5px;
    }
</style>

<div class="container">
    <img src="{{ asset('assets/images/category/digital-marketing-desktop.png') }}" alt="digital marketing">
    <div class="text-overlay">
        Digital Marketing
        <div class="subtext">
            Build your brand. Grow your business.
        </div>
    </div>
</div>
<!-- top banner end -->


<!-- categories -->
<style>
    .container {
        max-width: 100%;
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Align heading to the left */
        text-align: left;
    }

    .categories {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 20px;
        margin-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .card {
        width: 230px;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 20px;
        box-sizing: border-box;
    }

    .card img {
        max-width: 100%;
        height: auto;
    }

    .card h3 {
        margin-top: 20px;
    }

    .card ul {
        margin-top: 10px;
        padding-left: 0;
        list-style: none;
    }

    .card li {
        margin-bottom: 5px;
    }
</style>

<div class="container">
    <h3>Explore Digital Marketing</h3>
    <div class="categories">
        <div class="card">
            <img src="{{ asset('assets/images/category/search.png') }}" alt="search">
            <h3>Search</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/social.png') }}" alt="social">
            <h3>Social</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/advertising.png') }}" alt="advertising">
            <h3>Advertising</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <!-- Add more cards as needed -->
        <div class="card">
            <img src="{{ asset('assets/images/category/advertising.png') }}" alt="advertising">
            <h3>Advertising</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/advertising.png') }}" alt="advertising">
            <h3>Advertising</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/advertising.png') }}" alt="advertising">
            <h3>Advertising</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
        <div class="card">
            <img src="{{ asset('assets/images/category/advertising.png') }}" alt="advertising">
            <h3>Advertising</h3>
            <ul>
                <li><a href="#">List item 1</a></li>
                <li><a href="#">List item 2</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
                <li><a href="#">List item 3</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- category -->


<!-- guides -->

<style>
.related-guides-container {
        margin-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .related-guides-container .guide-container {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: #333;
        
    }

    .related-guides-container .guide-container img {
        width: 100%;
        object-fit: cover;
       
    }

    .related-guides-container .guide-container .guide-content {
        flex-grow: 1;
        text-align: left;
    }

    .related-guides-container .guide-container .guide-title {
        font-weight: bold;
    }

    .related-guides-container .guide-container .guide-description {
        font-size: 14px;
    }
</style>



<div class="related-guides-container">
    <h3>Digital Marketing Related Guides</h3>
    <div class="categories">
        <div class="card">
            <a href="" class="guide-container">
                <img src="{{ asset('assets/images/category/whatIsMarketing.jpg') }}" alt="Guide 1">
                <div class="guide-content">
                    <a href="" class="guide-description">What is Marketing?</a>
                </div>
            </a>
        </div>
       
        <div class="card">
            <a href="" class="guide-container">
                <img src="{{ asset('assets/images/category/promote.jpg') }}" alt="Guide 1">
                <div class="guide-content">
                    <a href="" class="guide-description">15 ways to promote your business online</a>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- guides -->

<!-- faq -->
<style>
    .digital-marketing-faqs{
        margin-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }
    .faq {
        margin-bottom: 20px;
        position: relative;
        
    }

    .faq input[type="checkbox"] {
        display: none;
    }

    .faq label {
        cursor: pointer;
        display: block;
        position: relative;
        padding-right: 25px; /* Adjust the padding as needed */
        font-size: 20px;
    }

    .faq label::before {
        content: "\25BC";
        display: inline-block;
        position: absolute;
        top: 0;
        right: 0;
        margin-right: 5px;
        transform: rotate(0deg);
        transition: transform 0.3s ease;
    }

    .faq input[type="checkbox"]:checked + label::before {
        transform: rotate(180deg);
    }

    .faq input[type="checkbox"] ~ .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq input[type="checkbox"]:checked ~ .faq-content {
        max-height: 1000px;
        transition: max-height 0.5s ease;
    }
</style>

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