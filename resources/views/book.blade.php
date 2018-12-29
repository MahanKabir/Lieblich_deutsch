@extends('master')

@section('content')

    <style>
        #tiles{
            margin: auto;
            width: 75%;
            padding: 10px;
        }
        #tile{


            box-shadow: 5px 5px 2.5px #6c757d;
        }
        #tile:hover{
            box-shadow: 2.5px 2.5px 1.25px #1d2124;
            cursor: pointer;
        }

    </style>


<body style="margin: 0; padding: 0; background-color: #E0E0E0">

    <div id="tiles" class="row">
        @foreach($bookModels as $bookModel)
            <div id="tile" class="card" style="margin: 10px; width: 30%;">
                <h5 class="card-title">Name: {{ $bookModel->bookName }}</h5>
                <img class="card-img-top" src="icons/telegram.png" alt="Card image cap">
                <div class="card-body">
                    <hr>

                    <h6 class="card-title">Type: {{ $bookModel->bookType }}</h6>
                    <h6 class="card-title">About: {{ $bookModel->bookAbout }}</h6>
                    <h6 class="card-title">Price: {{ $bookModel->bookPrice }} تومان</h6>
                    <hr>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        @endforeach

    </div>
</body>





    @endsection