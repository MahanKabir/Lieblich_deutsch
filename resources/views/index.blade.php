@extends('master')

@section('content')

    <body>


        <div class="container ,list-group" style="width: 500px">

            <input class="form-control" type="text" name="search" placeholder="Search">
            <ul class="list-group list-group-flush">
                @foreach($dict_model as $dict)
                <li class="list-group-item">
                    <p><span class="badge badge-primary">{{ $dict->word }}</span></p>
                    <p>{{ $dict->type }}</p>
                    <p>{{ $dict->article }}</p>
                    <p>{{ $dict->means }}</p>
                    <p>{{ $dict->description }}</p>


                </li>
                    @endforeach
            </ul>

        </div>
    </body>

    @endsection