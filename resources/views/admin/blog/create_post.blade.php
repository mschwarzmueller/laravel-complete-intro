@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')
    <div class="container">
        <form action="" method="post">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="input-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author">
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" rows="12"></textarea>
            </div>
            <button type="submit" class="btn">Create Post</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
@endsection