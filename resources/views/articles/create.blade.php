@extends('app')

@section('content')

    <h1>Добавить статью</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}

        @include('articles._form', ['submit_button_name' => 'Добавить статью'])

    {!! Form::close() !!}

    @include('errors.list')

@stop