@extends('layouts.admin')

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
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

          <table class="table table-bordered table-hover" id="userTable">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>Status</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                @if(count($users) > 0)
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_active == 1 ? "active" : "blocked" }}</td>
                        <td>{{ $user->registration_date }}</td>
                      </tr>
                     @endforeach
                @else
                    <tr>
                        <td colspan="5">No users found</td>
                    </tr>
                @endif
            </tbody>
          </table>


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
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

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
    });
    });
</script>

 
@endpush