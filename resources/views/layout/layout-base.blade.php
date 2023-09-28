<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite("resources/js/app.js")
    @vite("resources/sass/app.scss")
</head>
<body>
    <nav class="navbar navbar-dark p-3 bg-dark d-flex justify-content-beetwen">
        <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            API de form's
        </a>
        
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                asass
            </li>
            <li class="nav-link mx-2">
                asass
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-link">
                <a href="" class="btn btn-warning">Login</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    
</body>
</html>