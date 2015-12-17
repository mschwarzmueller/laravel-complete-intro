@extends('layouts.admin-master')

@section('content')
    <div class="container">
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="{{ route('admin.blog.create_post') }}" class="btn">New Post</a></li>
                        <li><a href="#" class="btn">Show all Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    <li>
                        <article>
                            <div class="post-info">
                                <h3>The post title ...</h3>
                                <span class="info">Maximilian | 15. November 2016</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <div class="post-info">
                                <h3>Another post title ...</h3>
                                <span class="info">Maximilian | 15. November 2016</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#">Edit</a></li>
                                        <li><a href="#" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="#" class="btn">Show all Messages</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    <li>
                        <article>
                            <div class="message-info">
                                <h3>Message subject</h3>
                                <span class="info">Sender: Max | 15. November 2016</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article>
                            <div class="message-info">
                                <h3>Message subject</h3>
                                <span class="info">Sender: Max | 15. November 2016</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="#">View</a></li>
                                        <li><a href="#" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                    </li>
                </ul>
            </section>
        </div>
    </div>
@endsection