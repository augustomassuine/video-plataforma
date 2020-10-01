@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid pb-0" style="min-height: 670px">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="/channels/create" class="right-action-link text-gray mr-3">
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
                            <h6>Todos Canais ({{ count($channels) }})</h6>

                            @if (session('message'))
                                @include('alerts.sucess-messages')
                            @endif

                        </div>
                    </div>


                    @foreach($channels as $cannel)

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