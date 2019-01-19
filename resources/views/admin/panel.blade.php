<!DOCTYPE html>
<html>

<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <title></title>
</header>

<body style="direction: rtl">

<div style="display: inline-flex; width: 100%; height: 100vh;">

    @include('admin.sidebar')
    <div style="width: 100%;">
        @yield('content')
    </div>
</div>



</body>
</html>