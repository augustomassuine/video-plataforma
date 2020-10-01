@extends('layouts.auth-layout')

@section('content')

    <div class="container-fluid pl-0 pr-0">
    <div class="row no-gutters">
        <div class="col-md-5 p-5 bg-white full-height">
            <div class="login-main-left">
                <div class="text-center mb-5 login-main-left-header pt-4">
                    <img src="{{ asset('assets/img/favicon.png') }}" class="img-fluid" alt="LOGO">
                    <h5 class="mt-3 mb-3">Crie a sua conta no eVCourses</h5>
                    {{--<p>It is a long established fact that a reader <br> will be distracted by the readable.</p>--}}
                </div>

                {{--Form de template--}}
                <form method="POST" action="{{ route('register') }}">

                    @csrf

                    <div class="form-group">
                        <label>Nome:</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Senha:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Repita a Senha:</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-outline-primary btn-block btn-lg">
                            Criar conta
                        </button>
                    </div>
                </form>
                {{--./Form de template--}}

                <div class="text-center mt-5">
                    <p class="light-gray">Já está registado? <a href="/login">Entrar</a></p>
                </div>
            </div>
        </div>

        @include('layouts.auth-slide-show')

    </div>
</div>

@endsection