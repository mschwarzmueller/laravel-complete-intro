@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container">
        <section id="post-admin">
            <a href="#" class="btn">New Post</a>
        </section>
        <section class="list">
            <article>
                <div class="post-info">
                    <h3>The post title ...</h3>
                    <span class="info">Maximilian | 15. November 2016</span>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">View Post</a></li>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="post-info">
                    <h3>The post title ...</h3>
                    <span class="info">Maximilian | 15. November 2016</span>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">View Post</a></li>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="post-info">
                    <h3>The post title ...</h3>
                    <span class="info">Maximilian | 15. November 2016</span>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">View Post</a></li>
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="danger">Delete</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
            <article>
                <div class="post-info">
                    <h3>The post title ...</h3>
                    <span class="info">Maximilian | 15. November 2016</span>
                </div>
                <div class="edit">
                    <nav>
                        <ul>
                            <li><a href="#">View Post</a></li>
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