@extends('app')

@section('content')
    <h1>Edit an article</h1>
    <hr>
    {!! Form::model($posts, ['method' => 'PATCH', 'url' => ['posts', $posts->id]]) !!}


    <div class="form-group">

        {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('slug', 'Short:') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('content', 'Continut:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published', 'publicat: 1-da; 0-nu') !!}
        {!! Form::text('published', null, ['class' => 'form-control']) !!}
    </div>
    <br>
    <br>
    <div class="form-group">
        {!! Form::label('published_at', 'publicat pe data:') !!}
        {!! Form::input('date', 'published_at', date('Y-d-m'), ['class' => 'form-control']) !!}
    </div>
    <br>
  {{-- {!! Form::hidden('id', null) !!}--}}
    <div class="form-group">

        {!! Form::submit('Update Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}