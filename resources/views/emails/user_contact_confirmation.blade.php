<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h2>Hello {{ $user_name }},</h2>
    <p>Thank you for reaching out to us. We have received your message:</p>
    <p><strong>Your Message:</strong></p>
    <p>{{ $user_message }}</p>
    <p>We will get back to you as soon as possible.</p>
</body>
</html>
