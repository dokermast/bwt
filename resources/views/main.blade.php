@extends('layout.basic')

@section('content')

    <div class="text-center top-btn">
        @include('includes.btns_tables')
    </div>

    @if($countries)
        <div class="text-center">

            <form action="{{route('user_country')}}" role="form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control" name="country_id" class="form-control" >
                                @foreach($countries as $el)
                                    <option value="{{$el->id}}">{{$el->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <button type="submit" class="btn btn-primary">GEt Users</button>
            </form>

        </div>
    @else
        <div class="text-center">
            <h3>no users</h3>
        </div>
    @endif

@endsection
