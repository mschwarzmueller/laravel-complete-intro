@extends('layouts.admin-master')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <section id="post-admin">
            <a href="{{ route('admin.blog.post.edit', ['post_id' => $post->id]) }}" class="btn">Edit Post</a>
            <a href="{{ route('admin.blog.post.delete', ['post_id' => $post->id]) }}" class="btn danger">Delete Post</a>
        </section>
        <section class="post">
            <h1>{{ $post->title }}</h1>
            <span class="info">{{ $post->author }} | {{ $post->created_at }}</span>
            <p>{{ $post->body }}</p>
        </section>
    </div>

@endsection