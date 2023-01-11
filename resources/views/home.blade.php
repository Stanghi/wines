@extends('layouts.main')

@section('content')
<h1 class="text-center">home</h1>

<div class="container">

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Winery</th>
        <th scope="col">Rating</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($wines as $wine )
      <tr>
        <th scope="row">{{$wine->id}}</th>
        <td>{{$wine->name}}</td>
        <td>{{$wine->winery}}</td>
        <td>{{$wine->rating}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection

