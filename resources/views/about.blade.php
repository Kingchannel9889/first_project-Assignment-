<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 10px;
        }
 

        p {
            color: #555;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    @include('pages.header')
    <h1>About Our Company</h1>

    <div class="card">
        <p>Welcome to our About page! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="card">
        <h2>Our Mission</h2>
        <p>Our mission is to provide high-quality products/services that meet the needs of our customers. We strive for excellence in everything we do, from product development to customer service.</p>
    </div>

    <div class="card">
        <h2>Our Team</h2>
        <p>We have a dedicated team of professionals who are passionate about their work. Our team members bring diverse skills and experiences to the table, fostering innovation and creativity.</p>
    </div>

    <div class="card">
        <h2>Company History</h2>
        <p>Established in 2024, our company has been serving customers with integrity and commitment. Over the years, we have grown and adapted to meet the changing needs of the market.</p>
    </div>

    <div class="card">
        <h2>Contact Us</h2>
        <p>If you have any questions or would like to learn more about our company, feel free to <a href="/contact">contact us</a>.</p>
    </div>

    @include('pages.footer')
</body>
</html>
