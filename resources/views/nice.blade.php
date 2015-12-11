@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        <h1>I {{$action}} {{$name}}!</h1>
    </div>
@endsection
