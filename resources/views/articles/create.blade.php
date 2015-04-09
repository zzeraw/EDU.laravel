@extends('app')

@section('content')

    <h1>Добавить статью</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}

        <div class="form-group">
            {!! Form::label('title', 'Заголовк:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Текст:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('published_at', 'Опубликовать с:') !!}
            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Добавить статью', ['class' => 'btn btn-primary']) !!}
        </div>


    {!! Form::close() !!}
@stop