@extends('app')

@section('content')
    <h1>Write a new article</h1>
    <hr>
{!! Form::open(['url' => 'create']) !!}

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
    <br>
    <div class="form-group">
        {!! Form::label('published', 'publica: 1-da; 0-nu') !!}
        {!! Form::text('published', null, ['class' => 'form-control']) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('published_at', 'publicat pe data:') !!}
        {!! Form::input('date', 'published_at', date('Y-d-m'), ['class' => 'form-control']) !!}
    </div>
    <br>
    <div class="form-group">

        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>


{!! Form::close() !!}
<hr>
    <h1>Delete article</h1>
    <hr>
    {!! Form::open(['action'=> 'PostController@destroy']) !!}
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        {!! Form::text('id', null, ['class' => 'form-control']) !!}
    </div>
    <hr>

    <br>
    <div class="form-group">

        {!! Form::submit('Delete Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}

@stop

