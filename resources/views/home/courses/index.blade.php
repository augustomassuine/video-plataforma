@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid pb-0" style="min-height: 650px">
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

            @if (session('message'))
                @include('alerts.sucess-messages')
            @endif

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

        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->

@endsection