@extends('layout.basic')

@section('content')

    @include('includes.btn_block')

    <div class="text-center"><h3>USERS</h3></div>

    <div class="text-center">
        @if(isset($users))
        <table class="table table-main">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">companies</th>
                    <th scope="col">countries</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->name}}</td>
                    <td>{{$el->email}}</td>
                    <td><button class="btn btn-secondary btn-sm" data-toggle="collapse" data-target="#companies_{{ $el->id }}" aria-expanded="false">Companies</button></td>
                    <td></td>
                </tr>
                @foreach($el->companies as $item)
                    <tr class="collapse" id="companies_{{$el->id}}">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->country->name}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
            @endif
    </div>

@endsection
