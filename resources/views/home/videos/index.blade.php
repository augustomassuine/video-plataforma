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


            {{--Vídeos--}}
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">

                        @if (session('message'))
                            @include('alerts.sucess-messages')
                        @endif

                        <div class="main-title">
                            <div class="btn-group float-right right-action">

                                <a href="/upload" class="right-action-link text-gray mr-3">
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
                            <h6>Novos Videos ({{ count($videos) }})</h6>
                        </div>
                    </div>

                    @foreach($videos as $video)

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

                    @endforeach

                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->

@endsection