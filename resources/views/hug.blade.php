@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        <h1>I hug {{ isset($name) ? $name : 'you' }}!</h1>
    </div>
@endsection
