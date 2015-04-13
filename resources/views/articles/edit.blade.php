@extends('app')

@section('content')

    <h1>Редактировать: {{ $article->title }}</h1>

    <hr/>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

        @include('articles._form', ['submit_button_name' => 'Изменить статью'])

    {!! Form::close() !!}

    @include('errors.list')

@stop