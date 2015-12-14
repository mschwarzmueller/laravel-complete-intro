@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        @if(Session::has('fail'))
            <div class="fail">
                {{ Session::get('fail') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            <div class="input-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="btn">Submit</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
@endsection
