@extends('navbar')
  
@section('viewingpages')
<x-mymessages />
    <div>This is my Edit page</div>
    <!-- {{$specificTodo->title}} -->
    <form method="POST" class="form" action="{{route('todo.update', $specificTodo->id)}}">
        @csrf
        <input type="text" name="title" value="{{$specificTodo->title}}">
        <input type="submit" />
        <!-- <button class="btn btn-primary btn-sm">Edit Form</button> -->
    </form>
@endsection
