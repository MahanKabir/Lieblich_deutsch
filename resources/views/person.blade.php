@extends('master')

@section('content')
    <div>

        <form action="{{ action('personalController@store') }}" method="post">

            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="text" name="fname" placeholder="نام">
            <input type="text" name="lname" placeholder="نام خانوادگی">
            <input type="text" name="age" placeholder="سن">
            <input type="submit" value="send">

        </form>
    </div>
    @endsection