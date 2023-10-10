@extends('layouts.app')

@section('content')

<h1>To-Do #{{$todo->id}}</h1>
<p>{{$todo->title}}</p>
<p>{{$todo->body}}</p>

@endsection