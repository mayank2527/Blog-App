@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 style="color:brown">Create Posts</h2>
        <form method="POST" action="http://lsapp.dev/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="article-ckeditor" cols="30" rows="10" placeholder="write.."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection