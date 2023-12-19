<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    

    {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("build\assets\app-041e359a.css")}}">    
    <link rel="stylesheet" href="{{asset("build\assets\app-e1a597e2.css")}}">     --}}
    {{-- <link rel="stylesheet" href="{{asset("css/app.css")}}">     --}}
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
    {{-- <script src="{{asset("build\assets\app-c75e0372.js")}}"></script> --}}
    @vite("resources/sass/app.scss")
    @vite("resources/css/app.css")
</head>
<body>
    
    @include('components.layout.navbar')
    @yield('content')
    
    @vite("resources/js/app.js")

</body>
</html>