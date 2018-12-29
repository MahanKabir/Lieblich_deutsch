@extends('master')godzilla

@section('content')

    <style>
        .tile{
            width: 100px;
            height: 100px;
        }
        .rows{
            margin: auto;
            width: 100%;
            padding: 10px;
        }
    </style>

    <body>

    <div class="rows container">
        <div class="row">
            <div id="one" class="tile">1</div>
            <div id="two" class="tile" style="background: #721c24">2</div>
            <div id="three" class="tile" style="background: #005cbf">3</div>
        </div>
        <div class="row">
            <div id="one" class="tile">1</div>
            <div id="two" class="tile" style="background: #721c24">2</div>
            <div id="three" class="tile" style="background: #005cbf">3</div>
        </div>
        <div class="row">
            <div id="one" class="tile">1</div>
            <div id="two" class="tile" style="background: #721c24">2</div>
            <div id="three" class="tile" style="background: #005cbf">3</div>
        </div>

    </body>

    @endsection