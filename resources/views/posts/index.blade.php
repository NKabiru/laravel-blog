@extends('layouts.master')

@section('content')
            <div class="col-md-8 blog-main">

                @foreach($posts as $post)

                    @include('posts.post')

                @endforeach


                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->



        {{--<div class="album py-5 bg-light">--}}
            {{--<div class="container">--}}

                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card mb-4 box-shadow">--}}
                            {{--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">--}}
                            {{--<div class="card-body">--}}
                                {{--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
                                {{--<div class="d-flex justify-content-between align-items-center">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
                                        {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
                                    {{--</div>--}}
                                    {{--<small class="text-muted">9 mins</small>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

@endsection