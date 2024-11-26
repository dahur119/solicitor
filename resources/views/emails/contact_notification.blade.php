<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>Hello,</h2>
    <p>You have received a new contact form submission. Below are the details:</p>
    <p><strong>Name:</strong> {{ $user_name }}</p>
    <p><strong>Email:</strong> {{ $user_email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $user_message }}</p>
</body>
</html>
