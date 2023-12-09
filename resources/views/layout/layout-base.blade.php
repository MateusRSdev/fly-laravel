<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("build\assets\app-041e359a.css")}}">    
    <link rel="stylesheet" href="{{asset("css/app.css")}}">    
    <script src="{{asset("build\assets\app-c75e0372.js")}}"></script>
</head>
<body>

    @include('components.layout.navbar')
    @yield('content')
    
</body>
</html>