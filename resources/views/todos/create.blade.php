@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'post']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
    <a href="/" class="btn btn-default">Cancel</a>
    {!! Form::close() !!}
@endsection