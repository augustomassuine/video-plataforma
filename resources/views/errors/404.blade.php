@extends('layouts.base')

@section('content')

    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto text-center  pt-4 pb-5">
                    <h1><img alt="404" src="{{ asset('assets/img/404.png') }}" class="img-fluid"></h1>
                    <h1>Desculpe! A página não foi encontrada.</h1>
                    <p class="land">
                        A página de que você está a procura, já não existe, talvez tenha sido removida ou movida para outro sítio.
                    </p>
                    <div class="mt-5">
                        <a class="btn btn-outline-primary" href="/"><i class="mdi mdi-home"></i>
                            Ir para a página inicial
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        @include('layouts.footer')

    </div>
    <!-- /.content-wrapper -->


@endsection