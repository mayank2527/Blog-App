@extends('layouts.layout')

@section('content')

<div class="container">
<h2>{{$post->title}}</h2>
<br>
<div class="card bg-faded">{!!$post->body!!}</div><br>


@if(!Auth::guest() && Auth::user()->id==$post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        <form method="POST" action="/posts/{{$post->id}}" class="float-right">
            {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>
@endif

</div>
   
@endsection 