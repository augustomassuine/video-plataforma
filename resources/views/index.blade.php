@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="top-mobile-search">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mobile-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search for..." class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="top-category section-padding mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Todas Categorias ({{ count($categories) }})</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-category">


                            @foreach($categories as $category)

                                <div class="item">
                                    <div class="category-item">
                                        <a href="#">

                                            @if($category->image !== 'assets/img/s2.png')
                                                <img class="img-fluid" src="{{ asset('storage' . $category->image) }}" alt="">
                                            @else
                                                <img class="img-fluid" src="{{ asset($category->image) }}" alt="">
                                            @endif

                                            <h6>
                                                {{ $category->name }}

                                                @if($category->user_id === auth()->id())
                                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
                                                @endif

                                            </h6>
                                            <p>0 visualizações</p>
                                        </a>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <hr>

            {{--Cursos--}}
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="/courses/create" class="right-action-link text-gray mr-3">
                                    Adicionar <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Cursos em Videos ({{ count($courses) }})</h6>
                        </div>
                    </div>

                    @foreach($courses as $course)
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="/courses/{{ $course->id }}"><i class="fas fa-play-circle"></i></a>
                                    <a href="/courses/{{ $course->id }}">
                                        @if($course->image)
                                            <img class="img-fluid" style="height: 180px" src="{{ asset('storage' . $course->image) }}" alt="">
                                        @else
                                            <img class="img-fluid"  style="height: 180px" src="{{ asset('assets/img/v1.png') }}" alt="">
                                        @endif
                                    </a>
                                    <div class="time">
                                        {{ $course->total_videos }} vídeos
                                    </div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="/courses/{{ $course->id }}" style="color: rgba(0,0,0, .5)!important;">
                                            {{ $course->title }}
                                        </a>
                                        <a class="float-right" href="/courses/{{ $course->id }}/edit "><i class="fas fa-edit"></i></a>
                                    </div>
                                    <div class="video-title">
                                        <a href="#">
                                            {{ $course->price }} MT
                                        </a>
                                    </div>
                                    <div class="video-view">
                                        Duração {{ $course->duration }}
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        10 visualizações &nbsp;<i class="fas fa-calendar-alt"></i> 11 dias ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <hr>

            {{--Vídeos--}}
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Novos Videos ({{ count($videos) }})</h6>
                        </div>
                    </div>

                    @foreach($videos as $video)

                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#">

                                        <img class="img-fluid" src="{{ asset('storage' . $video->image_url) }}" alt="">

                                    </a>
                                    <div class="time">
                                        {{ $video->duration }}
                                    </div>
                                </div>
                                <div class="video-card-body" style="height: 100px">
                                    <div class="video-title">
                                        <a href="#">
                                            {{ $video->title }}
                                        </a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>

            <hr class="mt-0">

            {{--Canais--}}
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Últimos canais ({{ count($channels) }})</h6>
                        </div>
                    </div>

                    @foreach($channels as $channel)
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="channels-card">
                                <div class="channels-card-image">
                                    <a href="#">

                                        @if($channel->logo !== 'assets/img/s4.png')
                                            <img class="img-fluid" src="{{ asset('storage' . $channel->logo) }}" alt="">
                                        @else
                                            <img class="img-fluid" src="{{ asset($channel->logo) }}" alt="">
                                        @endif
                                    </a>
                                    <div class="channels-card-image-btn">
                                        <button type="button" class="btn @if($channel->user_id === auth()->id()) btn-outline-secondary @else btn-outline-danger @endif btn-sm">Subscribe <strong>1.4M</strong></button>
                                    </div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="#">{{ $channel->name }}</a>
                                    </div>
                                    <div class="channels-view">
                                        0 subscrições
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->

@endsection