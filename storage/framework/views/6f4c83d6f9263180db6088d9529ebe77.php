

<?php $__env->startPush('styles'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
 
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
                <?php if(count($users) > 0): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->is_active == 1 ? "active" : "blocked"); ?></td>
                        <td><?php echo e($user->registration_date); ?></td>
                      </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No users found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>


        </div>
    <!-- /.card-body -->
    </div>
  <!-- /.card -->
  </div>
<!-- /.col -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
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

 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/admin/user-list.blade.php ENDPATH**/ ?>