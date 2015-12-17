@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        @if(Session::has('fail') || count($errors) > 0)
            <div class="fail">
                {{ Session::get('fail') }}<br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(Session::has('success'))
                <div class="success">
                    {{ Session::get('success') }}<br>
                </div>
            @endif
        @if(!Auth::check())
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
        @endif
        <h1>Send me a mail...</h1>
            <form action="{{ route('mail.send') }}" method="post">
                <div class="input-group">
                    <label for="email">E-Mail</label>
                    <input type="text" id="email" name="email" placeholder="Send mail to...">
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="10" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
    </div>
@endsection
