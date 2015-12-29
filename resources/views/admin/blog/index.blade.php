@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@append

@section('content')
    <div class="container">
        @include('includes.info-box')
        <section id="post-admin">
            <a href="{{ route('admin.blog.create_post') }}" class="btn">New Post</a>
        </section>
        <section class="list">
            @if(count($posts) == 0)
                No Posts
            @endif
            @foreach($posts as $post)
                <article>
                    <div class="post-info">
                        <h3>{{ $post->title }}</h3>
                        <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                <li><a href="{{ route('admin.blog.post', ['post_id' => $post->id, 'end' => 'admin']) }}">View Post</a></li>
                                <li><a href="{{ route('admin.blog.post.edit', ['post_id' => $post->id]) }}">Edit</a></li>
                                <li><a href="{{ route('admin.blog.post.delete', ['post_id' => $post->id]) }}" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            @endforeach
        </section>
        @if($posts->lastPage() > 1)
            <section class="pagination">
                @if($posts->currentPage() !== 1)
                    <a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
                @endif
                @if($posts->currentPage() !== $posts->lastPage())
                    <a href="{{ $posts->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
                @endif
            </section>
        @endif
    </div>

@endsection