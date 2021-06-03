<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop tatoo</title>
    <link rel="stylesheet" href="{{secure_asset('/css/app.css')}}">
</head>
<body>
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    <script src="{{secure_asset('js/app.js')}}"></script>
</body>
</html>