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
                            <div class="single-video">

                                <form action="{{ route('videos.store') }}" method="POST" role="form" enctype="multipart/form-data">

                                    @csrf

                                    <div class="row">
                                        <div class="col-md-8 mx-auto text-center pt-5 pb-5">
                                            <h3><i class="fas fa-file-upload text-primary" style="font-size: 80px"></i></h3>
                                            <h4 class="mt-5">Selecione vídeos para fazer upload</h4>
                                            <p class="land">Ou arraste o vídeos aqui</p>
                                            <p>
                                                <input type="file" name="videos[]" multiple value="{{ old('videos') ? old('videos') : '' }}" class="@error('videos') is-invalid @enderror">
                                            </p>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <input type="hidden" name="course_id" value="{{ $course->id }}">

                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-outline-primary">Gravar os videos selecionados</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="single-video-title box mb-3">
                                <h2>
                                    <a href="#">{{ $course->title }}</a>
                                </h2>
                                <p class="mb-0"><i class="fas fa-eye"></i> 0 visualizações</p>
                            </div>
                            <div class="single-video-author box mb-3">
                                <div class="float-right">
                                    <button class="btn btn-danger" type="button">Inscrever-me <strong>119</strong></button>
                                    <button class="btn btn btn-outline-danger" type="button"><i class="fas fa-bell"></i></button>
                                </div>

                                <img alt="Avatar" class="img-fluid" src="{{ auth()->user()->avatar }}">

                                <p>
                                    <a href="#">
                                        <strong>{{ auth()->user()->name }}</strong>
                                    </a>
                                    <span title="" data-placement="top" data-toggle="tooltip" data-original-title="Verified">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </span>
                                </p>
                                <small>Publicado a {{ date('d/m/Y', strtotime($course->created_at)) }}</small>
                            </div>
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
                            <div class="single-video-info-content box mb-3">
                                <div class="row d-flex justify-content-center mt-100 mb-100">

                                    <base-comments-component
                                        :course="{{ $course }}"
                                        :auth="{{ auth()->user() }}"
                                    ></base-comments-component>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-video-right">

                            <base-courses-component :course="{{ $course }}"></base-courses-component>

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