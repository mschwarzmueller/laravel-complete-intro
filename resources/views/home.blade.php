@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        <h1>What do you want to do?</h1>
        <p>
            <a href="{{ url('do/greet') }}">Greet you</a><br>
            <a href="{{ route('hug') }}">Hug you</a>
        </p>

        <br><br>

        <form action="{{route('custom_action')}}" method="post">
            <label for="select-action">I want to ...</label>
            <select name="action" id="select-action">
                <option value="greet">greet</option>
                <option value="hug">hug</option>
            </select>
            <input type="text" name="name">
            <br>
            <button type="submit">Do it!</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
@endsection
