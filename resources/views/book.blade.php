@extends('master')

@section('content')

    <style>
        #book_tiles_view{
            margin: auto;
            width: 75%;
            padding: 10px;
        }
        #book_tile_view{
            box-shadow: 5px 5px 2.5px #6c757d;
        }
        #book_tile_view:hover{
            box-shadow: 2.5px 2.5px 1.25px #1d2124;
        }
        #book_tile_view img{
            width: 176.5px;
            height: 249.5px;
            box-shadow: 2.5px 2.5px 2.5px #1d2124;
            margin: auto;
            margin-top: 10px;
        }

    </style>


<body style="margin: 0; padding: 0; background-color: #E0E0E0">

    <div id="book_tiles_view" class="row">
        @foreach($books as $book)
            <div id="book_tile_view" class="card" style="margin: 10px; width: 30%;">
                <img src="{{ $book->bookimage }}" class="img-thumbnail">
                <div class="card-body">
                    <h4 class="card-title">{{ $book->bookname." ". $book->booklevel }}</h4>
                    <hr>
                    <h6 class="card-title" style="text-align: right">{{ $book->booktype }}</h6>
                    <h6 class="card-title" style="text-align: right; direction: rtl">{{ $book->bookprice }}<span> تومان</span></h6>
                    <hr>
                    <div style="width: 100%; display: inline-flex; margin:auto">
                        <a href="#" class="btn btn-primary" style="width: 50%;font-size: 16px;margin: 1px">سبد خرید</a>
                        <a href="#" class="btn btn-success" style="width: 50%;font-size: 16px;margin: 1px">مشاهده</a>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</body>





    @endsection