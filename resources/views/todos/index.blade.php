@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="well">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
                <h4><a href="todo/{{$todo->id}}">{{$todo->body}}</a></h4>
                <a href="todo/{{$todo->id}}" class="label label-info" style="font-size: 70%">{{$todo->due}}</a>


            </div>
        @endforeach
    @endif
@endsection