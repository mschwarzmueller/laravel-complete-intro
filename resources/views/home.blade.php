@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="centered">
        <h1>What do you want to do?</h1>
        <p>
            @foreach($nice_action_names as $nice_action_name)
                <a href="{{ route('action', ['action' => $nice_action_name->name]) }}">{{ ucfirst($nice_action_name->name) }}</a>
            @endforeach
            {{--<a href="{{ url('do/greet') }}">Greet you</a><br>--}}
            {{--<a href="{{ route('hug') }}">Hug you</a><br>--}}
            {{--<a href="{{ route('wave') }}">Wave you</a>--}}
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

        <br><br>
        <p>
        <form action="{{ route('delete') }}" method="post">
            <button type="submit">Delete all Actions</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="_method" value="DELETE">
        </form></p>
        <table class="nice-action-log">
            <colgroup>
                <col width="50%">
                <col width="50%">
            </colgroup>
            <thead>
            <tr>
                <th>Nice Action</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logged_nice_actions as $logged_nice_action)
                <tr>
                    <td>{{ $logged_nice_action->niceAction->name }}</td>
                    <td>{{ $logged_nice_action->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
