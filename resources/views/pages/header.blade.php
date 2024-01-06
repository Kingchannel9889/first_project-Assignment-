<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

    <style>
        /* Reset some default styles */
        body, h1, p, a {
            margin: 0;
            padding: 0;
        }

        /* Style the header */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Style the navigation links container */
        nav {
            margin-top: 20px;
            text-align: center;
        }

        /* Style the navigation links */
        nav a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            display: inline-block;
            margin: 5px;
            border: 1px solid #fff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Change link color on hover */
        nav a:hover {
            color: #fff;
            background-color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>MY Laravel Website</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Page</a>
        <a href="/contact">Contact Page</a>
        <a href="/catalog">Catalog Page</a>
    </nav>
    
</body>
</html>
