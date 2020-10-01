@extends('layouts.base')

@section('content')


    <div id="content-wrapper">

        <form action="{{ route('videos.mass.update') }}" method="POST" role="form" enctype="multipart/form-data">

            @csrf

            <div class="container-fluid upload-details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>Detalhe dos vídeos</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="imgplace">
                            @if($video)
                                <img src="{{ asset('storage/' . $video->image_url) }}" style="height: 100px;width: 180px" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="osahan-title">
                            {{ $video ? $video->title : count($videos) . ' videos por actualizar'}}
                        </div>
                        @if($video)
                            <div class="osahan-size"> ... MB . {{ $video->duration }} MIN</div>
                        @endif
                        <div class="osahan-progress">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                            <div class="osahan-close">
                                <a href="#"><i class="fas fa-times-circle"></i></a>
                            </div>
                        </div>
                        {{--<div class="osahan-desc">Your Video is still uploading, please keep this page open until it's done.</div>--}}
                    </div>
                </div>
                <hr>
                <div class="row">

                    @if (session('message'))
                        @include('alerts.sucess-messages')
                    @endif

                    <div class="col-lg-12">
                        <div class="osahan-form">

                            @if($video)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="e1">Título do vídeo</label>
                                            <input type="text" name="title" value="{{ old('title') ? old('title') : $video->title }}" placeholder="Curso online de Quasar" id="e1" class="form-control @error('title') is-invalid @enderror">

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="e2">Descrição do vídeo</label>
                                            <textarea rows="4" name="description" id="e2" name="e2" class="form-control">
                                                {{ old('description') ? old('description') : $video->description }}
                                            </textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="e3">Canal</label>
                                        <select id="e3" name="channel_id" class="custom-select">
                                            <option value="-1">Nenhum</option>

                                            @foreach($channels as $channel)
                                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="e3">Curso</label>
                                        <select id="e3" name="course_id" class="custom-select">
                                            <option value="-1">Nenhum</option>

                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="main-title">
                                        <h6>Categorias (pode selecionar várias)</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row category-checkbox">

                                @foreach($categories as $category)
                                    <!-- checkbox 1col -->
                                    <div class="col-lg-2 col-xs-6 col-4">
                                        <div class="custom-control custom-checkbox">
                                            <input name="categories[]" value="{{ $category->id }}" type="checkbox" class="custom-control-input" id="customCheck{{ $category->name }}">
                                            <label class="custom-control-label" for="customCheck{{ $category->name }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                                <input type="hidden" name="videosIds" value="{{ json_encode($videosIds) }}">

                        </div>
                        <div class="osahan-area text-center mt-3">
                            <button class="btn btn-outline-primary">Actualizar vídeo(s)</button>
                        </div>

                    </div>
                </div>
            </div>

        </form>

        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->


@endsection