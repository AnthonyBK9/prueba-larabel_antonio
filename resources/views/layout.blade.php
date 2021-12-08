<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/resources/css/app.css') }}">
    <title>Home</title>
    <style>
            .active a {
                    color: red;
                    text-decoration: none;
            }
    </style>
</head>
<body>
        <?php ?>
        <div>
                <h1>Bienvenido! </h1>
        </div>
        @include('nav/nav')
        @yield('content')
</body>
</html>