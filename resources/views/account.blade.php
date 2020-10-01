@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100 border-none">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-users"></i>
                            </div>
                            <div class="mr-5">Meus Canais <b>({{ count(auth()->user()->channels) }})</b></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/channels">
                            <span class="float-left">Ver todos canais</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100 border-none">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-video"></i>
                            </div>
                            <div class="mr-5">Meus Videos <b>({{ count(auth()->user()->videos) }})</b> </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/videos">
                            <span class="float-left">Todos vídeos</span>
                            <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100 border-none">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-list-alt"></i>
                            </div>
                            <div class="mr-5">Minhas Categorias <b>({{ count(auth()->user()->categories) }})</b></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/categories">
                            <span class="float-left">Todas as categorias</span>
                            <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100 border-none">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-cloud-upload-alt"></i>
                            </div>
                            <div class="mr-5">Meus cursos <b>({{ count(auth()->user()->courses) }})</b></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/courses">
                            <span class="float-left">Todos cursos</span>
                            <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
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
                            <h6>Cursos em Videos ({{ count(auth()->user()->courses) }})</h6>
                        </div>
                    </div>

                    @foreach(auth()->user()->courses as $course)
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
            <div class="video-block section-padding" style="min-height: 300px">
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
                            <h6>Meus Videos</h6>
                        </div>
                    </div>

                    @foreach(auth()->user()->videos as $index => $video)

                        @if ($index < 8)
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="/videos/play/{{ $video->id }}">
                                            <i class="fas fa-play-circle"></i>
                                        </a>
                                        <a href="/videos/play/{{ $video->id }}">

                                            <img class="img-fluid" src="{{ asset('storage' . $video->image_url) }}" alt="">

                                        </a>
                                        <div class="time">
                                            {{ $video->duration }}
                                        </div>
                                    </div>
                                    <div class="video-card-body" style="height: 100px">
                                        <div class="video-title">
                                            <a href="/videos/play/{{ $video->id }}">
                                                {{ $video->title }}
                                            </a>
                                        </div>
                                        <div class="video-page text-success">
                                            Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                        <div class="video-view">
                                            0 visualizações &nbsp;<i class="fas fa-calendar-alt"></i> 11 meses atrás
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach

                </div>
            </div>
            <hr class="mt-0">
            <div class="video-block section-padding" style="min-height: 300px">
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
                            <h6>Meus canais</h6>
                        </div>
                    </div>

                    @foreach(auth()->user()->channels as $cannel)

                        <div class="col-xl-3 col-sm-6 mb-3">

                            <div class="channels-card">

                                @if($cannel->user_id === auth()->id())
                                    <a href="/channels/{{ $cannel->id }}/edit " style="position: absolute;right: 10px;top: 5px">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                @endif

                                <div class="channels-card-image">
                                    <a href="/channels/{{ $cannel->id }}">
                                        @if($cannel->logo !== 'assets/img/s4.png')
                                            <img class="img-fluid" src="{{ asset('storage' . $cannel->logo) }}" alt="">
                                        @else
                                            <img class="img-fluid" src="{{ asset('assets/img/s4.png') }}" alt="">
                                        @endif
                                    </a>
                                    <div class="channels-card-image-btn"><button type="button" class="btn @if($cannel->user_id === auth()->id()) btn-outline-secondary @else btn-outline-danger @endif btn-sm">Subscribe <strong>1.4M</strong></button></div>
                                </div>
                                <div class="channels-card-body">
                                    <div class="channels-title">
                                        <a href="/channels/{{ $cannel->id }}">

                                            {{ $cannel->name }}

                                            @if($cannel->user_id === auth()->id())
                                                <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle"></i></span>
                                            @endif
                                        </a>
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