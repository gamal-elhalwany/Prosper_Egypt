<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h2>New Job Application</h2>
    
    <p><strong>Name:</strong> {{ $content['first_name'] }} {{ $content['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $content['email'] }}</p>
    <p><strong>Phone:</strong> {{ $content['phone'] }}</p>
    <p><strong>Applied For:</strong> {{ $content['apply_for'] }}</p>
</body>
</html>