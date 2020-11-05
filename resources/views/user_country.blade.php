@extends('layout.basic')

@section('content')

    @include('includes.btn_block')

    <div class="container text-center">
        <div class="text-center">
            <h3>BWT TEST</h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">user_id</th>
                <th scope="col">name</th>
                <th scope="col">company name</th>
                <th scope="col">country</th>
                <th scope="col">create_relation_date</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($users) && isset($country_id))
                @foreach($users as $user)
                    @foreach($user->companies as $company)
                        @if($country_id == $company->country->id )
                        <tr  class="bg-secondary text-white">
                        @else
                        <tr>
                        @endif
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->country->name }}</td>
                            <td>{{ $company->pivot->created_at }}</td>
                        </tr>
                    @endforeach
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection
