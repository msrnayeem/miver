
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Order Placed</title>
</head>
<body>
    <p>Hello <?php echo e($seller->name); ?>,</p>

    <p>A new order has been placed.</p>
    
    <p>Order ID: <?php echo e($order_id); ?></p>
    
    <p>Thank you for your business.</p>

    <p>Best regards,</p>
    <p>Miver</p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\miver\resources\views/emails/order-placed-seller.blade.php ENDPATH**/ ?>