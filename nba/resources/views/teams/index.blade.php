@extends('layouts.app');


@section('content')

<h1>Tems</h1>

@foreach($teams as $team)
<div>
    <h3><a href="/teams/{{$team->id}}">{{$team->name}}</a></h3>
</div>
@endforeach

@endsection