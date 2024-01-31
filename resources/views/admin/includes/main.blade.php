<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{config('app.name','Almutah')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="{{asset('js/jquery3.7.1.js')}}"></script>
    <script src="{{asset('css/bootstrap3.4.1.css')}}"></script>
</head>
<body>
@include('admin.includes.navbar')
@yield('content')


</body>
</html>
