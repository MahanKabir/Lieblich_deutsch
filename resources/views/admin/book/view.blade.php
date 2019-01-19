@extends('admin.panel')
@section('content')

    <style>
        #book_create{
            width: 75%;
            height:50px;
            margin: 10px auto;
        }
        #book_create a{
            width: 100%;
            height:50px;
            font-size: 24px;
        }
        #book_table{
            width: 75%;
            margin: auto;
            overflow-y: scroll;
            display: block;
            max-height:85vh;
        }
        #book_table img{
            width: 88.25px;
            height: 124.75px;
        }
    </style>
    <div id="book_create">
        <a class="btn btn-success" href="{{ route('book.create') }}">کتاب جدید</a>
    </div>
    <div id="book_table">

        @foreach($books as $book)

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">نام</th>
                    <th scope="col">سطح</th>
                    <th scope="col">نوع</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">جلد</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->bookname }}</td>
                    <td>{{ $book->booklevel }}</td>
                    <td>{{ $book->booktype }}</td>
                    <td>{{ $book->bookprice }}</td>
                    <td><img src="{{ $book->bookimage }}"></td>
                    <td>
                        <form action="" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <a href="{{ route('book.edit',['id'=>$book->id]) }}" target="_blank" class="btn btn-primary" >ویرایش</a>
                            <button type="submit" class="btn btn-danger" name="bookdelete" value="حذف">حذف</button>
                        </form>
                    </td>
                </tr>

                </tbody>
            </table>

            @endforeach

    </div>
@endsection