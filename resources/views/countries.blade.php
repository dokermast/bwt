@extends('layout.basic')

@section('content')

    @include('includes.btn_block')

    <div class="text-center"><h3>COUNTRIES</h3></div>

    <div class="text-center">
        @if(isset($countries))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($countries as $el)
            <tr>
                <td>{{$el->id}}</td>
                <td>{{$el->name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>

@endsection
