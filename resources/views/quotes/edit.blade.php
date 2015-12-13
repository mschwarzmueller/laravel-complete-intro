@extends('layouts.master')

@section('meta')

@endsection

@section('title')
    Edit Quote
@endsection

@section('content')
    <h1>Edit Quote</h1>
    <div class="edit-quote">
        <h1>Add a Quote</h1>
        <form action="">
            <div class="input-group">
                <label for="author">Your Name</label>
                <input type="text" id="author" name="author" placeholder="Your Name">
            </div>
            <div class="input-group">
                <label for="quote">Your Quote</label>
                <textarea name="quote" id="quote" rows="5" placeholder="Quote"></textarea>
            </div>
            <button class="btn" type="submit">Submit Quote</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="_method" value="PUT">
        </form>
        <form action="">
            <button class="btn btn-danger" type="submit">Delete Quote</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    </div>
@endsection
