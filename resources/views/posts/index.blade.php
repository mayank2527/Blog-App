@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 style="color:brown">Posts</h2>
@foreach ($posts as $item)
@if (count($posts)>0)
        <div class="card card-block bg-light">
        <h2><a href="posts/{{$item->id}}">{{$item->title}}</a></h2>
        <p>{!!$item->body!!}</p>
        <small>{{$item->created_at}} by {{$item->user->name}}</small>
        </div><br>
@endif
@endforeach
        </div>
    </div>
</div>
@endsection