@extends('layouts.app')

@section('content')
<h3>Create To Do</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
        </ul>
    </div>
@endif

<form action="{{route('todos.store')}}" method="post">
    @csrf
    <div>
        <label for="">Title</label>
        <input type="text" name="title" id="title">
        @if($errors->has('title'))
        <span>{{$errors->first('title')}}</span>
        @endif
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="body" id="body">
        @if($errors->has('body'))
        <span>{{$errors->first('body')}}</span>
        @endif
    </div>
    <button type="submit">Create</button>
</form>

@endsection