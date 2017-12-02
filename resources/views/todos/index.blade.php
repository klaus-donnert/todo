@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="well">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h3>
                <h4><a href="todo/{{$todo->id}}">{{$todo->body}}</a></h4>
                <div class="label label-danger" style="font-size: 50%">{{$todo->due}}</div>


            </div>
        @endforeach
    @endif
@endsection