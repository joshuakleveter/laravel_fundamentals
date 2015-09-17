@extends('app')

@section('content')
    <h1>Edit: {{ $article->title }}</h1>

    {!! Form::model($article, ['method'=>'PATCH', 'action'=>['ArticlesController@update', $article->id]]) !!}
      <!-- title form input-->
      <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
      </div>

      <!-- body form input -->
      <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
      </div>

      <!-- published_at form input -->
      <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
      </div>

      <!-- add article form input -->
      <div class="form-group">
        {!! Form::submit('Add Article', ['class'=>'btn btn-primary form-control']) !!}
      </div>
    {!! Form::close() !!}

    @include('errors.list')

@endsection
