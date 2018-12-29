@extends('master')

@section('content')

    <style>

    </style>

    <body>

    <div class="container shadow p-3 mb-5 bg-white rounded " style="width: 500px">

        <form action="{{ action('bookController@store') }}" method="post" enctype="multipart/form-data">


            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
            @include('errors')
            <div class="form-grout
                <label>عکس: </label>
                <input class="form-control" type="file" name="img_url" value="">
            </div>

            <div class="form-group">
                <label>نام کتاب: </label>
                <input class="form-control" type="text" name="bookName" placeholder="">
            </div>
            <div class="form-group">
                <label>نوع کتاب: </label>
                <input class="form-control" type="text" name="bookType">
            </div>
            <div class="form-group">
                <label>موضوع: </label>
                <input class="form-control" type="text" name="bookAbout">
            </div>
            <div class="form-group">
                <label>قیمت: </label>
                <input class="form-control" type="text" name="bookPrice">
            </div>
            <div class="form-group">
                <label>خلاصه: </label>
                <input class="form-control" type="text" name="description">
            </div>

            <input type="submit" value="Send" class="btn btn-success">
            <button name="back" class="btn btn-danger"><a href="{{ action('bookController@index') }}">Back</a></button>

        </form>

    </div>

    <body>

@endsection