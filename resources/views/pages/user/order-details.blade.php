@extends('layouts.default')

@section('title', 'Miverr - Orders')
@push('styles')
<style>
/* Custom CSS for button alignment */
/* Custom CSS for button alignment */
#update {
    display: block;
    margin: 0 auto;
}

@media (max-width: 599px) {
    #update {
        display: block;
        margin: 0 auto;
    }
}

</style>
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
      

            <div class="card mt-2 p-1">
                 <td>
                    @php
                        $statusText = '';
                        switch($order->order_status) {
                            case 0:
                                $statusText = 'Pending';
                                break;
                            case 1:
                                $statusText = 'Accepted';
                                break;
                            case 2:
                                $statusText = 'Delivered';
                                break;
                            case 3:
                                $statusText = 'Cancelled';
                                break;
                            default:
                                $statusText = 'Unknown';
                                break;
                        }
                    @endphp
                    <p class="text-center">Status: <span id="status">{{$statusText}}</span></p>
                </td>
                @if($type == 'seller')
                    <div class="row">
                        <div class="col-md-3">
                            <button id="update" class="btn btn-primary btn-sm" @if($order->order_status == 3 ||
                                $order->order_status == 2) disabled @endif>Update Order</button>
                        </div>
                    </div>
                @endif
            </div>


                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title">Order Information</h5>
                        <p>Order ID: {{ $order->order_id}}</p>
                        <p>Order Date: {{ $order->created_at->format('M d, y') }}</p>
                        <p>Service: {{ $order->gig->gig_title}}</p>
                        <p>Price: {{ $order->price}}</p>
                        <p>Delivery Date: {{ $order->delivery_date ? $order->delivery_date->format('d F, Y') : null }}</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<script>
    // Function to handle the button click
    $('#update').on('click', function () {
        const orderStatus = "{{ $order->order_status }}";
       
        // Define the options for the SweetAlert based on the order status
        let options = {};
        if (orderStatus == 0) {
            options = {
                title: 'Update Status',
                input: 'select',
                inputOptions: {
                    'accepted': 'Accept',
                    'cancelled': 'Cancel',
                },
                showCancelButton: true,
                cancelButtonText: 'Close',
                confirmButtonText: 'Update',
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value === '') {
                            resolve('You must select an option');
                        } else {
                            resolve();
                        }
                    });
                }
            };
        } else if (orderStatus == 1 ) {
            options = {
                title: 'Update Order Status',
                input: 'select',
                inputOptions: {
                    'delivered': 'Delivered',
                },
                showCancelButton: true,
                cancelButtonText: 'Close',
                confirmButtonText: 'Update',
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value === '') {
                            resolve('You must select an option');
                        } else {
                            resolve();
                        }
                    });
                }
            };
        } else {
            // Handle other cases here if needed
            return;
        }

        // Set the width of the SweetAlert based on the screen width
        const screenWidth = window.innerWidth || document.documentElement.clientWidth;
        if (screenWidth < 600) {
            options.width = '230px';
        }

        // Show the SweetAlert with the defined options
        Swal.fire(options).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    html: '<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Updating...</div>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                });
                const orderId = "{{ $order->id }}";
                const selectedOption = result.value;
                $.ajax({
                    url: "{{ route('order.update') }}",
                    type: "get",
                    data: {
                        order_id: orderId,
                        status: selectedOption
                    },
                    success: function(response) {
                        $('#status').text(selectedOption);
                        Swal.close();

                            Swal.fire({
                                icon: 'success',
                                title: 'Status Updated',
                                text: 'Your order status has been updated successfully!',
                                showConfirmButton: false,
                                timer: 2000 // 2 seconds
                            });
                    },
                    error: function(error) {
                        Swal.close();
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while updating the order status.',
                            confirmButtonText: 'OK'
                        });
                    }
                });

            }
        });
    });
</script>

@endpush