<!DOCTYPE html>
<html>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <title></title>
</header>
@include('header')

@yield('content')

@include('footer')

</html>