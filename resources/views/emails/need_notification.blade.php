<!DOCTYPE html>
<html>
<head>
    <title>Need Notification</title>
</head>
<body>
    <h2>New Need Request</h2>
    
    <div style="margin-bottom: 20px;">
        <strong>Name:</strong>
        <p>{{ $userName }}</p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Description:</strong>
        <p>{{ $userDescription }}</p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Category:</strong>
        <p>{{ $userCategory }}</p>
    </div>

    <div style="margin-bottom: 20px;">
        <strong>Message:</strong>
        <p>{{ $userMessage }}</p>
    </div>

    <p>This is an automated notification. Please review the request in your admin dashboard.</p>
</body>
</html>
