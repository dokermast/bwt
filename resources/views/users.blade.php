@extends('layout.basic')

@section('content')

    @include('includes.btn_block')

    <div class="text-center"><h3>USERS</h3></div>

    <div class="text-center">
        @if(isset($users))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->name}}</td>
                    <td>{{$el->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            @endif
    </div>

@endsection
