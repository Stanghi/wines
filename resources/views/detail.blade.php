@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{$wine->image}}" class="card-img-top" alt="{{$wine->name}}">
            <div class="card-body">
              <h5 class="card-title">{{$wine->name}}</h5>
              <p class="card-text">{{$wine->winery}}</p>
            </div>
          </div>
    </div>
@endsection
