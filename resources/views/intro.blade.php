<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        /* Reset some default styles */
        body, p {
            margin: 0;
            padding: 0;
        }

        /* Style the main content container */
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }

        /* Style paragraphs */
        p {
            line-height: 1.6;
            color: #777; /* Change to your desired color */
            margin-bottom: 20px;
            font-size: 18px;
        }

        /* Style unordered list */
        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        /* Style list items */
        li {
            background-color: #f4f4f4; /* Change to your desired background color */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    @include('pages.header')

    <main>
       
        <h2>The history of our product</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum tempora pariatur laudantium autem, nobis corrupti, voluptatum iusto sint aperiam in id quibusdam quis, eum maxime vitae accusantium officiis ad illum alias porro enim saepe animi facilis? Reprehenderit, suscipit quam minima voluptas pariatur provident quisquam nostrum voluptatum fuga laborum similique et exercitationem soluta consequuntur hic illum ut.</p>
        
        <h3>The benefits of our product</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur vestibulum nisl, nec dictum orci laoreet id.</p>

        @yield('content')
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia numquam aut aperiam corrupti unde perspiciatis id ipsam nihil magni sunt et enim, doloribus modi .</p>
    </main>

    @include('pages.footer')
</body>
</html>





    
