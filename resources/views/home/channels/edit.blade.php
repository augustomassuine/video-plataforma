@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid upload-details" style="min-height: 650px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h6>Actualizar Canal</h6>
                    </div>
                </div>
            </div>

            @if (session('message'))
                @include('alerts.sucess-messages')
            @endif

            <form method="POST" action="/channels/{{ $channel->id }}" role="form" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-sm-6">

                        @if($channel->logo !== 'assets/img/s4.png')
                            <img class="rounded-circle avatar-image" alt="" src="{{ asset('storage' . $channel->logo) }}" style="height: 130px;width: 130px">
                        @else
                            <img class="rounded-circle avatar-image" alt="" src="{{ asset('assets/img/s4.png') }}" style="height: 130px;width: 130px">
                        @endif
                    </div>
                    <div class="col-sm-12 mt-4">
                        <div class="form-group">
                            <label class="control-label">Carregar a imagem da categoria: <span class="required">*</span></label>
                            <input name="logo" class="form-control avatar-input border-form-control @error('logo') is-invalid @enderror" value="{{ old('logo') ? old('logo') : '' }}" autocomplete="logo" type="file">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Nome da categoria: <span class="required">*</span></label>
                            <input name="name" class="form-control border-form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $channel->name }}" required autocomplete="name" type="text">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Descrição da categoria: <span class="required">*</span></label>
                            <textarea name="description" class="form-control border-form-control" rows="4">
                               {{ old('description') ? old('description') : $channel->description }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <a href="#" class="btn btn-danger border-none" data-toggle="modal" data-target="#deleteChannelModal{{ $channel->id }}">
                            <i class="fa fa-trash"></i>
                            Deletar
                        </a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="/channels" class="btn btn-primary border-none"> Voltar </a>
                        <a href="/channels/create" class="btn btn-danger border-none"> Cancelar </a>
                        <button type="submit" class="btn btn-success border-none"> Actualizar </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

        @include('dialogs.confirm-delete-channel-dialog', $channel)

    </div>
    <!-- /.content-wrapper -->

@endsection