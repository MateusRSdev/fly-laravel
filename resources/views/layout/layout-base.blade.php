<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    
    @vite("resources/sass/app.scss")
    @vite("resources/css/app.css")
</head>
<body>
    
    @include('components.layout.navbar')
    @yield('content')
    
    @vite("resources/js/app.js")

</body>
</html>