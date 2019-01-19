@extends('master')

@section('content')

    <style>
        #book_tiles_view{
            margin: auto;
            width: 75%;
            padding: 10px;
        }
        #book_tile_view{
            width: 30%;
            box-shadow: 5px 5px 2.5px #6c757d;
            margin: 10px;
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
        #book_tile_view h6{
            text-align: right;
            direction: rtl;
        }
        #book_tile_view a{
            font-size: 16px;
            width: 50%;
            margin: 1px
        }

        @media screen and (max-width: 840px) {
            #book_tile_view{
                width: 100%;
            }
        }
        @media screen and (max-width: 420px) {
            #book_tile_view img{
                width: 88.25px;
                height: 124.75px;
                margin: auto;
                margin-top: 10px;
            }
            #book_tile_view h6,h4{
                font-size: 12px;
            }

            #book_tile_view a{
                font-size: 12px;
            }
        }

    </style>

    <div id="book_tiles_view" class="row">
        @foreach($books as $book)
            <div id="book_tile_view"  class="card">
                <img src="{{ $book->bookimage }}" class="img-thumbnail">
                <div class="card-body">
                    <h4 class="card-title">{{ $book->bookname." ". $book->booklevel }}</h4>
                    <hr>
                    <h6 class="card-title">{{ $book->booktype }}</h6>
                    <h6 class="card-title">{{ $book->bookprice }}<span> تومان</span></h6>
                    <hr>
                    <div style="width: 100%; display: inline-flex; margin:auto">
                        <a href="#" class="btn btn-primary">سبد خرید</a>
                        <a href="#" class="btn btn-success">مشاهده</a>
                    </div>

                </div>
            </div>
        @endforeach

        <div>{!! $books->render() !!}</div>

    </div>
    

@endsection