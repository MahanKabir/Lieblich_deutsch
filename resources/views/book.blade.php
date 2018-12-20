@extends('master')

@section('content')

    <style>
        #tiles{
            margin: auto;
            width: 100%;
            padding: 10px;
        }
        #tile{

            border: 1px solid #BFBFBF;

            box-shadow: 10px 10px 5px #6c757d;
        }
        #tile:hover{
            box-shadow: 5px 5px 2.5px #1d2124;
            cursor: pointer;
        }

    </style>


<body style="margin: 0; padding: 0; background-color: #E0E0E0">

    <div id="tiles" class="row">
        @foreach($bookModels as $bookModel)
            <div id="tile" class="card" style="margin: 10px; width: 30%;">
                <img class="card-img-top" src="icons/telegram.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $bookModel->bookName }}</h5>
                    <h6 class="card-title">Type: {{ $bookModel->bookType }}</h6>
                    <h6 class="card-title">About: {{ $bookModel->bookAbout }}</h6>
                    <h6 class="card-title">Price: {{ $bookModel->bookPrice }} تومان</h6>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        @endforeach

    </div>
</body>





    @endsection