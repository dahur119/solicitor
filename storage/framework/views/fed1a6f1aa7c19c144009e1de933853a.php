<!DOCTYPE html>
<html>
<head>
    <title>Need Notification</title>
</head>
<body>
    <h2>New Need Request</h2>
    
    <div style="margin-bottom: 20px;">
        <strong>Name:</strong>
        <p><?php echo e($userName); ?></p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Description:</strong>
        <p><?php echo e($userDescription); ?></p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Category:</strong>
        <p><?php echo e($userCategory); ?></p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Message:</strong>
        <p><?php echo e($userMessage); ?></p>
    </div>

    <p>This is an automated notification. Please review the request in your admin dashboard.</p>
</body>
</html>
<?php /**PATH C:\laragon\www\solicitor\resources\views/emails/need_notification.blade.php ENDPATH**/ ?>