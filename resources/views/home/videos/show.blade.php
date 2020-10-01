@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-8">

                        @if (session('message'))
                            @include('alerts.sucess-messages')
                        @endif

                        <div class="single-video-left">

                            <div style="min-height: 300px">
                                <play-video-component
                                    :video="{{ $video }}"
                                    @if(isset($course)) :course="{{ $course }}" @endif
                                ></play-video-component>
                            </div>

                            @if(isset($course))
                                <div class="single-video-title box mb-3">
                                    <h2>
                                        <a href="#">{{ $course->title }}</a>
                                    </h2>
                                    <p class="mb-0"><i class="fas fa-eye"></i> 0 visualizações</p>
                                </div>
                            @endif

                            <div class="single-video-author box mb-3">
                                <div class="float-right">
                                    <button class="btn btn-danger" type="button">Subscribe <strong>1.4M</strong></button>
                                    <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button>
                                </div>

                                @if(auth()->user()->avatar)
                                    <img alt="Avatar" class="img-fluid" src="{{ asset('storage'. auth()->user()->avatar) }}">
                                @else
                                    <img alt="Avatar" class="img-fluid" src="{{ asset('assets/img/not-auth-user.png') }}">
                                @endif

                                <p>
                                    <a href="#">
                                        <strong>{{ auth()->user()->name }}</strong>
                                    </a>
                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </span>
                                </p>
                                <small>Published on Aug 10, 2018</small>
                            </div>

                            @if(isset($course))
                                <div class="single-video-info-content box mb-3">
                                    <h6>Preço:</h6>
                                    <p>{{ $course->price }}, {{ $course->duration }}</p>
                                    <h6>Category :</h6>
                                    <p>Aqui a categoria do curso</p>
                                    <h6>Descrição :</h6>
                                    <p>{{ $course->description }}</p>
                                    <h6>Objectivos :</h6>
                                    <p>{{ $course->objectives }}</p>
                                    <h6>Tags :</h6>
                                    <p class="tags mb-0">
                                        <span><a href="#">Uncharted 4</a></span>
                                        <span><a href="#">Playstation 4</a></span>
                                        <span><a href="#">Gameplay</a></span>
                                        <span><a href="#">1080P</a></span>
                                        <span><a href="#">ps4Share</a></span>
                                        <span><a href="#">+ 6</a></span>
                                    </p>
                                </div>
                            @endif

                            {{--Comentários do vídeo--}}
                            <div class="single-video-info-content box mb-3">
                                <div class="row d-flex justify-content-center mt-100 mb-100">
                                    <div class="col-lg-12">
                                        <div class="card p-3">
                                            <div class="card-body text-center">
                                                <h4 class="card-title">Comentários</h4>
                                            </div>
                                            <div class="comment-widgets">
                                                <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">James Thomas</h6> <span class="m-b-15 d-block">This is awesome website. I would love to comeback again. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">April 14, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text active w-100">
                                                        <h6 class="font-medium">Michael Hussey</h6>
                                                        <span class="m-b-15 d-block">Thanks bbbootstrap.com for providing such useful snippets. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">May 10, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                                        <span class="m-b-15 d-block">Great industry leaders are not the real heroes of stock market. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">August 1, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">James Thomas</h6> <span class="m-b-15 d-block">This is awesome website. I would love to comeback again. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">April 14, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text active w-100">
                                                        <h6 class="font-medium">Michael Hussey</h6>
                                                        <span class="m-b-15 d-block">Thanks bbbootstrap.com for providing such useful snippets. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">May 10, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                                        <span class="m-b-15 d-block">Great industry leaders are not the real heroes of stock market. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">August 1, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">James Thomas</h6> <span class="m-b-15 d-block">This is awesome website. I would love to comeback again. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">April 14, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583319/AAA/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text active w-100">
                                                        <h6 class="font-medium">Michael Hussey</h6>
                                                        <span class="m-b-15 d-block">Thanks bbbootstrap.com for providing such useful snippets. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">May 10, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- Comment Row -->
                                                <div class="d-flex flex-row comment-row my-3">
                                                    <div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="user" width="50" class="rounded-circle"></div>
                                                    <div class="comment-text w-100">
                                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                                        <span class="m-b-15 d-block">Great industry leaders are not the real heroes of stock market. </span>
                                                        <div class="comment-footer my-2">
                                                            <span class="text-muted float-right">August 1, 2019</span>
                                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--Comentários do vídeo--}}
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="single-video-right">

                            @if(isset($course))
                                <base-courses-component :course="{{ $course }}"></base-courses-component>
                            @endif

                            @if(isset($videos))
                                <base-videos-component :videos="{{ $videos }}"></base-videos-component>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
                            <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://templatespoint.net/">TemplatesPoint</a>
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right">
                        <div class="app">
                            <a href="#"><img alt="" src="{{ asset('assets/img/google.png') }}"></a>
                            <a href="#"><img alt="" src="{{ asset('assets/img/apple.png') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.content-wrapper -->

@endsection