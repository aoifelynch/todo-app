@extends('layouts.myApp')

@section('content')
<h1>Todo #{{$todo->id}}</h1>

<p>{{ $todo->title }}</p>
<p>{{ $todo->body }}</p>

<div>
    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>

    <form action="{{ route('todos.destroy', $todo->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

</div>

@endsection