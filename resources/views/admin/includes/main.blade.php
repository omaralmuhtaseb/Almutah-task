<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'Almutah') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/jquery3.7.1.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap4.5.2.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
@include('admin.includes.navbar')
@yield('content')

@yield('scripts')
</body>
</html>
