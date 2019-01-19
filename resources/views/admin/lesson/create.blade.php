@extends('admin.panel')

@section('content')

    <style>
        #course_tile_create{
            width: 100%;
            height: 360px;
            background-color: #d39e00;
            direction: rtl;
            box-shadow: 2.5px 2.5px 2.5px #1d2124;
            border-radius: 2.5px;
        }
    </style>

    <div id="course_tile_create">
        <form action="{{ route('course.store')  }}" method="post" enctype="multipart/form-data">
            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="file" name="courseimage"><br>

            <label for="coursename">نام دوره: </label><br>
            <input type="text" name="coursename" value=""><br>

            <label for="courselevel">سطح دوره: </label><br>
            <input type="text" name="courselevel" value=""><br>

            <label for="coursetype">نوع دوره: </label><br>
            <input type="text" name="coursetype" value=""><br>

            <label for="courseprice">قیمت دوره: </label><br>
            <input type="text" name="courseprice" value=""><br>
            <input type="submit" class="btn btn-success" value="ارسال"><br>
        </form>
    </div>

@endsection