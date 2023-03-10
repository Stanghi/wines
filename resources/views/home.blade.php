@extends('layouts.main')

@section('content')
<h1 class="text-center">home</h1>

<div class="container">

    <h2>Totale vini: {{$wines->total()}}</h2>

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
        <th scope="row"><a href="{{route('detail', $wine->slug)}}">{{$wine->id}}</a></th>
        <td>{{$wine->name}}</td>
        <td>{{$wine->winery}}</td>
        <td>{{$wine->rating}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $wines->links() }}
</div>

@endsection

