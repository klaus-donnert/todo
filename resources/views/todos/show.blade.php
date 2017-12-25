@extends('layouts.app')

@section('content')
    <h3><a href="/todo/{{$todo->id}}/edit">{{$todo->text}}</a>&nbsp;</h3>
    <p><a href="/todo/{{$todo->id}}/edit">{{$todo->body}}</a>&nbsp;</p>
    <a href="/todo/{{$todo->id}}/edit" class="label label-info" style="font-size: 70%">{{$todo->due}}</a>
    <br>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
    <a href="/" class="btn btn-default">Cancel</a>
    <h1>Create Todo</h1>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'post', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    <hr>
@endsection