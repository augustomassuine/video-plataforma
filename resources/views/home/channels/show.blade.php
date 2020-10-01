@extends('layouts.base')

@section('content')

    <div class="single-channel-page" id="content-wrapper">
        <div class="single-channel-image">
            <img class="img-fluid" alt="" src="{{ asset('assets/img/channel-banner.png') }}">
            <div class="channel-profile">
                {{--<img class="channel-profile-img" alt="" src="{{ asset('assets/img/s2.png') }}">--}}

                @if($channel->logo !== 'assets/img/s4.png')
                    <img class="channel-profile-img" src="{{ asset('storage' . $channel->logo) }}" alt="">
                @else
                    <img class="channel-profile-img" src="{{ asset('assets/img/s4.png') }}" alt="">
                @endif

                <div class="social hidden-xs">
                    Social &nbsp;
                    <a class="fb" href="#">Facebook</a>
                    <a class="tw" href="#">Twitter</a>
                    <a class="gp" href="#">Google</a>
                </div>
            </div>
        </div>
        <div class="single-channel-nav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="channel-brand" href="#">

                    {{ $channel->name }}
                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            {{--<a class="nav-link" href="#"></a>--}}
                            <router-link class="nav-link" to="/videos">
                                Videos <span class="sr-only">(current)</span>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/courses">
                                Cursos
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/lives">
                                Lives
                            </router-link>
                        </li>
                        <li class="nav-item">
                            {{--<a class="nav-link" href="#">Conversas</a>--}}
                            <router-link class="nav-link" to="/messages">
                                Conversas
                            </router-link>
                        </li>
                        <li class="nav-item">
                            {{--<a class="nav-link" href="#">Sobre</a>--}}
                            <router-link class="nav-link" to="/about">
                                Sobre
                            </router-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Mais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Denunciar</a>
                                <a class="dropdown-item" href="#">Actualizar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Deletar</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">
                            <i class="fas fa-search"></i>
                        </button> &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-outline-danger btn-sm" type="button">
                            Subscrever-me <strong>1.4M</strong>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container-fluid" style="min-height: 350px">

            <router-view></router-view>

        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer ml-0">
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