@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container">
        <section id="category-admin">
            <form action="" method="post">
                <div class="input-group">
                    <label for="name">Category name</label>
                    <input type="text" name="name" id="name">
                    <button type="submit" class="btn">Create Category</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </div>
            </form>
        </section>
        <section class="list">
            <article>
                <div class="category-info">
                    <h3>Tech</h3>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="category-info">
                    <h3>Tech</h3>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="category-info">
                    <h3>Tech</h3>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="category-info">
                    <h3>Tech</h3>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
        </section>
        <section class="pagination">
            <a href="#"><i class="fa fa-caret-left"></i></a>
            <a href="#"><i class="fa fa-caret-right"></i></a>
        </section>
    </div>

@endsection