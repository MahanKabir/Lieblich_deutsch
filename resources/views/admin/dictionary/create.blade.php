@extends('master')

@section('content')

    <body>

    <div class="container shadow p-3 mb-5 bg-white rounded " style="width: 500px">

        <form action="{{ action('dictController@store') }}" method="post">

            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <input class="form-control" type="text" name="word" placeholder="کلمه مورد نظر را وارد کنید">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="type" placeholder="نوع کلمه مورد نظر را وارد کنید">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="article" placeholder="حرف تعریف کلمه مورد نظر را وارد کنید">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="means" placeholder="معنی کلمه مورد نظر را وارد کنید">
            </div>

            <div class="form-group">
            <textarea class="form-control" type="text" name="description" placeholder="کلمه مورد نظر را توصیف کنید"></textarea>
            </div>

            <input type="submit" value="Send" class="btn btn-success">

        </form>

    </div>

    <body>

@endsection