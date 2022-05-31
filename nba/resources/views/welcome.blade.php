@extends('layouts.app');

@section('title','teams');

$section('content');

<h1>Tems</h1>

$foreach($teams as $team)
<div>
    <h3>{{$team->name}}</h3>
</div>
$endforeach

@endsection