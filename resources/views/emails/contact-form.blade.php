<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Hello, Prosper Egypt</h1>
    <p>Name: {{$content['first-name'] .' '. $content['last-name'] }}</p>
    <p>Phone: {{$content['phone'] }}</p>
    <p>Subject: {{$content['subject'] }}</p>
    <p>Message: {{$content['message'] }}</p>
</body>
</html>