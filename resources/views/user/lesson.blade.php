@extends('master')

@section('content')

    <style>

        #course_tile{
            width: 100%;

        }
        #course_tile div{
            width: 50%;
            margin: auto;
            background-color: #0c5460;
        }
        .course_level{
            background-color: #1c7430;
            width: 50%;
            height: 50px;
            text-align: right;
            margin: auto;
            margin-top: 1px;

        }
        .course_level a{
            margin-right: 25px;

        }

    </style>

    <div>
        <div id="course_tile">
            <div>
                <h3 style="width: 100%; text-align: center">آموزش گرامر A1</h3>
                <p style="width: 100%; text-align: right">شامل دروس a1</p>

                <video width="100%" controls>
                    <source src="/s.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div>
            <div class="course_level"><a href="#">درس اول</a></div>
        </div>
    </div>


    @endsection