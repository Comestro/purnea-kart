<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<title>@yield('title')|{{env('APP_NAME')}}</title>--}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('desktop.components.header')
    
    @section('content')
    @show
    @include('desktop.components.footer')
</body>
</html>