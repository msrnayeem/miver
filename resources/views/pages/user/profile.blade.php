@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
<style>
    .left-content {
        width: 30%;
        height: 400px; /* Set the minimum height for left content */
        margin-top: 20px; /* Add a top margin of 20px */
        border: 1px solid #ccc;
        padding: 10px;
        overflow-y: auto; /* Add scrollbars if content overflows */
    }

    .right-content {
        width: 70%;
        min-height: 300px; /* Set the minimum height for right content */
        margin-top: 20px; /* Add a top margin of 20px */
        border: 1px solid #ccc;
        padding: 10px;
        overflow-y: auto; /* Add scrollbars if content overflows */
        
    }

    .col-6 {
        padding-left: 15px;
        padding-right: 15px;
    }
    .left-content .profile-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        
        height: 100%;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .left-content  .profile-card .profile-image-wrapper {
        max-width: 350px;
        max-height: 350px; 
        border-radius: 1%;
        background-color: #f0f0f0; /* Fallback color if image is not available */
        overflow: hidden;
        margin-bottom: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .left-content .profile-card .profile-image-wrapper .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .profile-name {
        font-size: 18px;
        margin-bottom: 5px;
        text-align: center;
    }

    hr {
        width: 80%;
        border: 1px solid black;
        margin: 10px auto;
    }
    /* Styling for label and info rows */
    .row {
        margin-bottom: 5px;
        width: 100%;
    }

    .profile-label {
        font-size: 14px;
        color: #888;
        margin: 0;
    }

    .profile-info {
        font-size: 14px;
        color: #333;
        margin: 0;
    }


    /* Styling for the right content */
    
.categories {
  display: flex;
  flex-wrap: wrap;
  justify-content: left;
  
}

.categories .card {
  min-width: 210px;
  max-width: 210px;
  margin: 10px;
  padding: 10px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

@media screen and (max-width: 768px) {
    .categories .card {
    width: 100%;
  }
}

.categories .card img {
  width: 100%;
  height: auto;
  border-radius: 5px;
  margin-bottom: 10px;
}

.user-section {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}


.user-name {
  margin-left: 10px;
  font-weight: bold;
}

h3 a {
  color: #333;
  text-decoration: none;
}

h4 {
  color: #666;
  margin-top: 5px;
}

p {
  color: #888;
  margin-top: 5px;
  text-align: right;
}
    
#active-gigs{
    background-color:#f7f7f7;
    border-bottom: 6px solid #1dbf73;
    padding: 16px 16px;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
}
#drafts{
    background-color:#f7f7f7;
    padding: 16px 16px;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
    color: #1dbf73;
}
.btn-green{
            font-size: 16px;
    line-height: 24px;
    padding: 9px 24px;
    box-sizing: border-box;
    text-transform: initial;
        }
        .btn-standard.btn-green {
    background-color: #1dbf73;
    font-weight: 700;
    color: #fff!important;
    border: 1px solid transparent;
    padding-left: 10px;
    padding-right: 10px;
}
#become-seller a{
    text-decoration: none;
    color: #fff;
}
</style>


@endpush
@section('content')
<div class="container">
    <div class="row align-items-start">
        <div class="col-md-5 left-content" style=" margin-right:20px; margin-left:-20px;">
            <div class="profile-card">
                    <div class="profile-image-wrapper">

                         <img src="{{ asset('uploads/'.$user->id.'.jpg') }}" alt="Profile Image" class="profile-image">

                        </div>
                            <p class="profile-name">{{ $user->name }}</p>
                            <hr>
                        <div class="row">
                            <div class="col-md-6 ">
                                <p class="profile-label">Location:</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <p class="profile-info">New York, USA</p>
                            </div>
                        </div>

                <!-- Second row inside the left-content column -->
                <div class="row">
                    <div class="col-md-6">
                        <p class="profile-label">Joined:</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p class="profile-info">{{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @if ($user->gigs->count() > 0)
        <div class="col-md-7 right-content">
            <div class="row mx-0" >
                <div class=" border" style="background-color:#f7f7f7;">
                    <label class="text-center me-2" id="active-gigs">Active gigs</label>
                    <label class="text-center ms-2" id="drafts">Drafts</label>
                </div>
            </div>
           
                <div class="categories" id="for_gigs">
                    @foreach ($user->gigs as $gig)
                    <div class="card">
                        <img src="{{ asset('image.png') }}" alt="name">
                        
                        <h5><a href="">{{$gig->gig_title}}</a></h5> 
                        @if ($gig->packages->isNotEmpty())
                            <p>Starting at {{ $gig->packages->first()->price }}</p>
                        @endif    

                    </div>
                    @endforeach
                </div>

                <div class="categories" id="for_drafts" style="display: none;">
                    <div class="card">
                        <p>There are no drafts yet.</p>
                    </div>
                </div>
        </div>
        @else
        <div class="col-md-6 d-flex align-items-center justify-content-center mt-4" id="become-seller" style="background-color: #ffffff; height: 300px; border:1px solid #ddd">
            <a href="{{ route('seller.personal.info') }}">
                <span class="btn-standard btn-green rounded">Become a Seller</span>
            </a>
        </div>
        @endif
    </div>
</div>


@endsection

@push('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
<script>
    $(document).ready(function() {
        // When clicking on "Active gigs", show the corresponding section and hide "Drafts"
        $('#active-gigs').on('click', function() {
            $('#for_gigs').show();
            $('#for_drafts').hide();
            
            $(this).css('color','black');
            $('#drafts').css('color','#1dbf73');
            $(this).css('border-bottom','6px solid #1dbf73');
            $('#drafts').css('border-bottom','6px solid #f7f7f7');
        });

        // When clicking on "Drafts", show the corresponding section and hide "Active gigs"
        $('#drafts').on('click', function() {
            $('#for_drafts').show();
            $('#for_gigs').hide();
      
            $(this).css('color','black');
            $('#active-gigs').css('color','#1dbf73');
            $(this).css('border-bottom','6px solid #1dbf73');
            $('#active-gigs').css('border-bottom','6px solid #f7f7f7');
        });
    });
</script>

@endpush