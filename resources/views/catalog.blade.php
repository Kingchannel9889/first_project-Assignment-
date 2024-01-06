<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('pages.header')
    <h1>Catalog</h1>
    
    <h2>List of customer names</h2>

    @php
        $customers =[
        'John Doe',
        'Michael Smith',
        'Jordan',
        'Johny Smith',
        'Sally'
    ];
    @endphp

    @foreach ($customers as $index => $cus)
        <p> {{ $index + 1 }}, Name: {{ $cus }}</p>
    @endforeach

    @include('pages.footer')
</body>
</html>
