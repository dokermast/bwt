@extends('layout.basic')

@section('content')

    @include('includes.btn_block')

    <div class="text-center"><h3>COMPANiES</h3></div>

    <div class="text-center">
        @if(isset($companies))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">country</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($companies as $el)
                    <tr>
                        <td>{{$el->id}}</td>
                        <td>{{$el->name}}</td>
                        <td>{{$el->country->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
