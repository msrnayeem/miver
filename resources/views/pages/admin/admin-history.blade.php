@extends('layouts.admin')

@push('styles')
    <!-- DataTables -->
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
        <h2 class="card-title">History</h2>
      </div>
       <!-- /.card-header -->

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="historyTable">
              <thead>
                  <tr>
                      <th>User/admin</th>
                      <th>Name</th>
                      <th>Action type</th>
                      <th>Event</th>
                      <th>Created at</th>
                  </tr>
              </thead>
              <tbody>
                  @if(count($histories) > 0)
                      @foreach($histories as $history)
                        <tr>
                            <td> {{ $history->user_id == 1 ? "Admin" : "User" }} </td> 
                            <td> {{ $history->user->name }} </td> 
                            <td> {{ $history->action }} </td>
                            <td> {{ $history->description }} </td>
                            <td> {{ $history->created_at }} </td>                
                        </tr>
                      @endforeach 
                  @else
                      <tr>
                          <td colspan="4">No history found</td>
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>


<script>
    $(document).ready(function() {
        $('#historyTable').DataTable({
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

    });
</script>

 
@endpush