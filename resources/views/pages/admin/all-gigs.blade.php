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
            <table class="table table-bordered table-hover" id="gigTable">
              <thead>
                  <tr>
                      <th>Title</th>
                      <th>Seller</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                      <th>Created at</th>
                  </tr>
              </thead>
              <tbody>
                  @if(count($gigs) > 0)
                      @foreach($gigs as $gig)
                        <tr>
                          <td> {{ $gig->gig_title }} </td>
                          <td> {{ $gig->seller->name }} </td>
                          <td> {{ $gig->gig_status == 1 ? "Approved" : "Pending" }} </td>
                          
                          <td class="text-center">
                            <button class="btn btn-sm btn-warning view-button" data-gig="{{ $gig }}">
                             {{ $gig->gig_status == 1 ? "Pending" : "Approve" }}
                            </button>
                            <button class="btn btn-sm btn-danger ml-2 delete-button" data-gig="{{ $gig }}">
                                Delete
                            </button>
                         </td>

                          <td> {{ $gig->created_at }} </td>
                        </tr>
                      @endforeach 
                  @else
                      <tr>
                          <td colspan="4">No gigs found</td>
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
      var table = $('#gigTable').DataTable();

      // Handle "View" button click
      $('.view-button').click(function() {
          var gig = $(this).data('gig');
          var status = gig.gig_status == 1 ? 'pending' : 'approve';
          Swal.fire({
              title: 'Change status !',
              text: 'Are you sure you want to ' + status + ' this gig ?',
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
                          url: '{{ route("gig.update.status") }}',
                          type: "get",
                          data: {
                              "gig_id": gig.id,
                              "status": gig.gig_status == 1 ? 0 : 1,
                          },
                          success: function(response) {
                           
                            Swal.close();
                          
                              Swal.fire({
                                  title: 'Success !',
                                  text: 'Gig status has been changed successfully !',
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