@extends('layouts.master')

@section('content')
    <div class="col-md-8 blog-main">

        <h1>{{ $post->title }}</h1>

        @if(count($post->tags))
            <div>
                @foreach($post->tags as $tag)
                    <a href="/posts/tags/{{ $tag->name }}">#{{ $tag->name }}</a>
                @endforeach
            </div>
            <br>
        @endif

        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
                    {{ $comment->body }}
                </li>
                @endforeach
            </ul>
        </div>

        {{-- Add comments--}}
        <hr>

        <div class="card">
            <div class="card-body">
                <form method="post" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>

                    @include('layouts.errors')
                </form>
            </div>
        </div>

    </div>

@endsection