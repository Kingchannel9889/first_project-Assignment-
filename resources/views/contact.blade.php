<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1{
            text-align: center;
        }

        p {
            color: #555;
            text-align: center !important;
            max-width: 600px;
            margin: 0 auto 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    @include('pages.header')
    <h1>Contact Page</h1>

    <p>Feel free to reach out to us using the contact form below:</p>

    <form action="/submit-contact" method="post">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    @include('pages.footer')
</body>
</html>
