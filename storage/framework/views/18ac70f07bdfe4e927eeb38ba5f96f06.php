<?php $__env->startSection('title', 'Miverr - Orders'); ?>
<?php $__env->startPush('styles'); ?>
<style>
    .container {
        width: 100%;
    }

    .header-order {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }

    .header-order .search-box-order {
        display: flex;
        align-items: center;
    }

    .search-box-order input[type="text"] {
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 5px;
        margin-right: 5px;
        outline: none;
    }

    .search-box-order button {
        cursor: pointer;
    }

    /* Override Bootstrap button styles to remove the default border */
    .search-box-order button:focus {
        outline: none;
        box-shadow: none;
        border: none;
    }

    .table-container {
        padding: 30px;
    }

    .order-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .order-table th,
    .order-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .order-table th {
        background-color: #f2f2f2;
    }

    .order-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .order-table tr:hover {
        background-color: #ddd;
    }

    /* CSS for the HR line */
    .menu-hr {
        border: none;
        border-top: 10px solid yellow;
    }

    .menu {
        display: flex;
        justify-content: center;
    }

    .menu a {
        position: relative;
        text-decoration: none;
        padding: 10px 20px;
        color: #000; /* Change color as needed */
    }

    .menu a.active {
        color: #ff0000; /* Change color for the active menu item */
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
        .header-order {
            flex-direction: column;
            align-items: center;
        }

        .header-order .search-box-order {
            margin-top: 10px;
        }

        .order-table {
            font-size: 14px;
        }
    }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="header-order">
        <h1>Manage orders</h1>
        <div class="search-box-order">
            <input type="text" id="customSearch" placeholder="Search...">
        </div>
    </div>

    <div class="menu">
        <a href="#" data-filter="all">All</span></a>
        <a href="#" data-filter="Yes">Priority</span></a>
        <a href="#" data-filter="active">Active</span></a>
        <a href="#" data-filter="late">Late</span></a>
        <a href="#" data-filter="delivered">Delivered</span></a>
        <a href="#" data-filter="cancelled">Cancelled</span></a>
    </div>

    <hr class="menu-hr">

    <div class="table-container">
        <table class="order-table" id="orderTable">
            <thead>
                <tr>
                   
                    <!-- Gig ID always visible -->
                    <th class="d-md-table-cell">Order id</th>

                    <!-- Show Buyer ID on desktop, hide on mobile -->
                    <th class="d-none d-md-table-cell">Buyer</th>

                    <!-- Show Price on desktop, hide on mobile -->
                    <th class="d-none d-md-table-cell">Price</th>

                    <!-- Show Order Placed on desktop, hide on mobile -->
                    <th class="d-none d-md-table-cell">Order Placed</th>
                    
                    <th>Delivery Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($orders) > 0): ?>
                 <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="d-md-table-cell"><?php echo e($order->order_id); ?></td>
                        <td class="d-none d-md-table-cell"><?php echo e($order->buyer->name); ?></td>
                        <td class="d-none d-md-table-cell"><?php echo e($order->price); ?></td>
                        <td class="d-none d-md-table-cell"><?php echo e($order->created_at->format('M d, y')); ?></td>
                        <td><?php echo e($order->delivery_date ? $order->delivery_date->format('M d, y') : 'Not fixed yet'); ?></td>
                        <td><?php echo e($order->order_status); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="7">No orders found</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#orderTable').DataTable({
            dom: 'lrtip',
            searching: true, // Disable the DataTables search box
        });

        $('#customSearch').on('keyup change', function () {
            var searchValue = $(this).val();

            // Perform the search on all columns
            table.search($(this).val()).draw() 
        });
        // Add click event handlers to menu items
        $('.menu a').on('click', function(e) {
            e.preventDefault();

            var filterValue = $(this).data('filter');

            // Clear the search input field
            $('#customSearch').val('');

            // Perform the filter based on the clicked menu item
            if (filterValue === 'all') {
                table.search('').draw();
            }else {
                table.search(filterValue).draw();
            }
        });
    });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/user/orders.blade.php ENDPATH**/ ?>