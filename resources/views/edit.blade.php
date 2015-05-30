@extends('app')

@section('content')
    <h1>Edit an article</h1>
    <hr>
    {!! Form::open(array('url'=> 'update', 'method' => 'POST')) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $posts->title, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('slug', 'Short:') !!}
        {!! Form::text('slug', $posts->slug, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div class="form-group">
        {!! Form::label('content', 'Continut:') !!}
        {!! Form::textarea('content', $posts->content, ['class' => 'form-control']) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('published_at', 'publicat pe data:') !!}
        {!! Form::input('date', 'published_at', date('Y-d-m'), ['class' => 'form-control']) !!}
    </div>
    <br>
    {!! Form::hidden('id', $posts->id) !!}
    <div class="form-group">

        {!! Form::submit('Update Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}