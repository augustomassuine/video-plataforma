@extends('layouts.base')

@section('content')


    <div id="content-wrapper">
        <div class="container-fluid upload-details">

            <form action="{{ route('courses.store') }}" method="POST" role="form" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>Adição de cursos</h6>
                        </div>
                    </div>

                    @if (session('message'))
                        @include('alerts.sucess-messages')
                    @endif

                    <div class="col-lg-2 pb-1">
                        <div class="imgplace"></div>
                    </div>
                    <div class="col-lg-10">
                        <div class="osahan-title text-danger text-right">Está no modo rascunho (A publicação pode levar até 15 dias)</div>
                        <div class="form-group mt-2">
                            <label for="e1">Titulo do curso</label>
                            <input type="file" name="image" id="e1" class="form-control">
                        </div>
                    </div>
                </div>
                <hr>

                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="osahan-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="e1">Titulo do curso</label>
                                        <input type="text" name="title" value="{{ old('title') ? old('title') : '' }}" placeholder="Curso online...." id="e1" class="form-control @error('title') is-invalid @enderror">

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="description">Descrição</label>
                                        <textarea rows="3" id="description" name="description" class="form-control @error('description') is-invalid @enderror">
                                           {{ old('description') ? old('description') : '' }}
                                        </textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="objectives">Objectivos do curso</label>
                                        <textarea rows="3" id="objectives" name="objectives" class="form-control @error('objectives') is-invalid @enderror">
                                            {{ old('objectives') ? old('objectives') : '' }}
                                        </textarea>

                                        @error('objectives')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e1">Preço do curso</label>
                                        <input type="number" name="price" value="{{ old('price') ? old('price') : '' }}" placeholder="Curso online...." id="e1" class="form-control @error('price') is-invalid @enderror">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e1">Total de vídeos do curso</label>
                                        <input type="number" name="total_videos" value="{{ old('total_videos') ? old('total_videos') : '' }}" placeholder="17 vídeos" id="e1" class="form-control @error('total_videos') is-invalid @enderror">


                                        @error('total_videos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e1">Duração do curso</label>
                                        <input type="text" name="duration" value="{{ old('duration') ? old('duration') : '' }}" placeholder="6 meses" id="e1" class="form-control @error('duration') is-invalid @enderror">

                                        @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="e1">ID do canal</label>
                                        <input type="text" name="channel_id" value="{{ old('channel_id') ? old('channel_id') : '' }}" disabled placeholder="60" id="e1" class="form-control @error('channel_id') is-invalid @enderror">

                                        @error('channel_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="main-title">
                                        <h6>Categorias (selecione apenas uma)</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row category-checkbox ml-2">

                                @foreach($categories as $category)
                                    <div class="col-lg-2 col-sm-6 col-4 custom-control-inline custom-checkbox">
                                        <input type="checkbox" name="category_id" value="{{ $category->id }}" class="custom-control-input" id="customCheck{{ $category->id }}">
                                        <label class="custom-control-label" for="customCheck{{ $category->id }}">
                                            {{ $category->name  }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                        <div class="osahan-area text-right mt-3" style="background: gainsboro">
                            <button type="submit" class="btn btn-outline-primary">
                                Gravar e continuar
                            </button>
                        </div>
                        <hr>
                        <div class="terms text-center">
                            <p class="mb-0">O seu curso vai ficar no modo de rascunho, só depois de ser avaliado pelos administradores será publicado <a href="#">Terms of Service</a> and <a href="#">para nossa comunidade</a>.</p>
                            <p class="hidden-xs mb-0">A avaliação do curso pode levar até 15 dias</p>
                        </div>
                    </div>
                </div>

            </form>

        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->


@endsection