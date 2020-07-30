@extends('layouts.app')

@section('content')

    <h2>Create Post</h2>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'Post', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description','',['id' => 'editor','class'=>'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
