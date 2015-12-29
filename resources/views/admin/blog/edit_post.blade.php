@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@append

@section('content')
    <div class="container">
        @include('includes.info-box')
        <form action="{{ route('admin.blog.post.update') }}" method="post">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" {{ $errors->has('title') ? 'class=has-error' : '' }} value="{{  Request::old('title') ? Request::old('title') : isset($post) ? $post->title : '' }}">
            </div>
            <div class="input-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" {{ $errors->has('author') ? 'class=has-error' : '' }} value="{{  Request::old('author') ? Request::old('author') : isset($post) ? $post->author : '' }}">
            </div>
            <div class="input-group">
                <label for="category_select">Add Categories</label>
                <select name="category_select" id="category_select">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="button" class="btn">Add Category</button>
                <div class="added-categories">
                    <ul>
                        @foreach($post_categories as $post_category)
                            <li><a href="#" id="{{ $post_category->id }}">{{ $post_category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <input type="hidden" name="categories" id="categories" value="{{ implode(',', $post_categories_ids) }}">
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" rows="12" {{ $errors->has('body') ? 'class=has-error' : '' }}>{{  Request::old('body') ? Request::old('body') : isset($post) ? $post->body : '' }}</textarea>
            </div>
            <button type="submit" class="btn">Update Post</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="post_id" value="{{ $post->id }}">
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::to('src/js/posts.js') }}"></script>
@append