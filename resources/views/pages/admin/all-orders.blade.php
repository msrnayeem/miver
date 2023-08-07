@extends('layouts.admin')

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.2.0/css/scroller.dataTables.min.css">
@endpush

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">

      <div class="card-header">
        <h2 class="card-title">All Users</h2>
      </div>
       <!-- /.card-header -->

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="userTable">
              <thead>
                  <tr>
                      <th>Order Id</th>
                      <th>Buyer</th>
                      <th>Seller</th>
                      <th>Price</th>
                      <th>Created at</th>
                      <th>Delivery Date</th>
                      <th>Status</th>
                      <th>Priority</th>
                  </tr>
              </thead>
              <tbody>
                  @if(count($orders) > 0)
                      @foreach($orders as $order)
                        <tr>
                            <td> {{ $order->order_id }} </td>
                            <td> {{ $order->buyer->name }} </td>
                            <td> {{ $order->seller->name }} </td>
                            <td> {{ $order->price }} </td>
                            <td> {{ $order->created_at }} </td>
                            <td> {{ $order->delivery_date }} </td> 
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
                                {{$statusText}}
                            </td>  
                            <td> {{ $order->is_urgent == 0 ? "No" : "Yes" }} </td>                   
                        </tr>
                      @endforeach 
                  @else
                      <tr>
                          <td colspan="4">No users found</td>
                      </tr>
                  @endif
              </tbody>
            </table>
          </div>


        </div>
    <!-- /.card-body -->
    </div>
  <!-- /.card -->
  </div>
<!-- /.col -->
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,  
        "fixedHeader": true, 
        "scrollCollapse": true,
       });

   
      
      // Initialize DataTables
      var table = $('#userTable').DataTable();

      // Handle "View" button click
      $('.view-button').click(function() {
          var user = $(this).data('user');
          var status = user.is_active == 1 ? 'block' : 'unblock';
          Swal.fire({
              title: 'Change status !',
              text: 'Are you sure you want to ' + status + ' this user ?',
              icon: 'warning',
              confirmButtonText: 'OK',
              showCancelButton: true,
              cancelButtonText: 'Cancel',
          }).then((result) =>
              {
                  if (result.isConfirmed)
                  {

                      Swal.fire({
                        title: 'Loading...',
                        icon: 'info',
                        showConfirmButton: false,
                        allowOutsideClick: false
                      });

                      $.ajax({
                          url: '{{ route("user.update.status") }}',
                          type: "get",
                          data: {
                              "user_id": user.id,
                              "status": user.is_active == 1 ? 0 : 1,
                          },
                          success: function(response) {
                           
                            Swal.close();
                          
                              Swal.fire({
                                  title: 'Success !',
                                  text: 'User status has been changed successfully !',
                                  icon: 'success',
                                  confirmButtonText: 'OK',
                              })

                            setTimeout(function() {
                                location.reload();
                            }, 700);
                              
                          },
                          error: function(error) {
                           
                              Swal.close();
                              Swal.fire({
                                  title: 'Error !',
                                  text: 'Something went wrong !',
                                  icon: 'error',
                                  confirmButtonText: 'OK',
                              })

                              setTimeout(function() {
                                location.reload();
                              }, 700);
                          }
                      });
                  }
              });
      });

    });
</script>

 
@endpush