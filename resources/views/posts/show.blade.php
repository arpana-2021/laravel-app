@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <h2>Posts</h2>
         <h3>{{ $post->title }}</h3>
            <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
    <br><br>
    <div>
        {!! $post->description !!}
    </div>
    <hr>
    <small>created on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method','DELETE') }}
                {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif

@endsection
