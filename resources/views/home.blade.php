@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(count($posts)>0)
                    <h3>You Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th>
                                   <form method="POST" action="/posts/{{$post->id}}">
                                        {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                            </th>
                        </tr>
                         @endforeach
                    </table>
                    @else
                    <h3>No Posts</h3>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
