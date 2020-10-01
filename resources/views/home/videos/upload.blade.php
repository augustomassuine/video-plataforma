@extends('layouts.base')

@section('content')


    <div id="content-wrapper">
        <div class="container-fluid pt-5 pb-5" style="min-height: 650px">
            <div class="row">

                <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
                    <form action="{{ route('videos.store') }}" method="POST" role="form" enctype="multipart/form-data">

                        @csrf

                        <h1><i class="fas fa-file-upload text-primary"></i></h1>
                        <h4 class="mt-5">Selecione vídeos para fazer upload</h4>
                        <p class="land">Ou arraste os vídeos aqui</p>
                        <p>
                            <input type="file" name="videos[]" multiple value="{{ old('videos') ? old('videos') : '' }}"
                                   class="@error('videos') is-invalid @enderror">
                        </p>

                        @error('videos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input type="hidden" name="redirect_to" value="editPage">

                        <div class="mt-4">
                            <button type="submit" class="btn btn-outline-primary">Gravar os videos selecionados</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->


@endsection