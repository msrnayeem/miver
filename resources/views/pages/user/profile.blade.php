@extends('layouts.default')

@section('title', 'Miverr - Home')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/profile.css') }}">
    <style>
        /* #become-seller{
            background: #fff;
    text-align: center;
    padding: 128px 0 120px;
    border: 1px solid #ddd;
    border-radius: 2px;
    margin-bottom: 20px;
        } */
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
    <div class="row">
        <div class="col-md-6">
            <div class="container mt-4 mb-4 p-3 d-flex justify-content-start"> 
                <div class="card p-4">
                    <div class=" image d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ asset('uploads/'.$user->id.'.jpg') }}" height="100" width="100" />
                        <span class="name mt-3">{{ $user->name }}</span> 
                        <span class="idd">{{ $user->email }}</span> 

                        <div class=" d-flex mt-2">
                            <button class="btn btn-info">Edit Profile</button> 
                        </div> 
                        <div class="text mt-3"> 
                            <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.
                                <br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. 
                            </span> 
                        </div> 
                        <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                            <span><i class="fa fa-twitter"></i></span> 
                            <span><i class="fa fa-facebook-f"></i></span> 
                            <span><i class="fa fa-instagram"></i></span> 
                            <span><i class="fa fa-linkedin"></i></span> 
                        </div> <div class=" px-2 rounded mt-4 date "> 
                            <span class="join">Joined, {{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y') }}</span> 
                        </div> 
                        <br><br>
                        <div class="col-md-6" id="become-seller">
                                <a href="{{ route('seller.personal.info') }}"><span class="btn-standard btn-green">Become a Seller</span></a>
                            </div>
                    </div> 
                </div>
            </div>
        </div>

      <!-- tav -->

        <div class="col-md-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active-gigs" role="tab" aria-controls="active-gigs" aria-selected="true">Active gigs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="drafts-tab" data-toggle="tab" href="#drafts" role="tab" aria-controls="drafts" aria-selected="false">Drafts</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="active-gigs" role="tabpanel" aria-labelledby="active-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Content for Active gigs tab -->
                            <h3>Active gigs</h3>
                            <!-- Add other content specific to Active gigs tab here -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="drafts" role="tabpanel" aria-labelledby="drafts-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Content for Drafts tab -->
                            <h3>Drafts</h3>
                            <!-- Add other content specific to Drafts tab here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- tab emd -->

      
    </div>
  </div>

@endsection

@push('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endpush