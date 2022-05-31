@extends('layouts.app');


@section('content')
<h1>{{$team->name}}</h1>
<p>{{$team->email}}</p>
<p>{{$team->address}}</p>
<p>{{$team->city}}</p>


@foreach($players as $player)

<h2>{{$player->first_name}}</h2>
<p>{{$player->last_name}}</p>
@endforeach
@endsection