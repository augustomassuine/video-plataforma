@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique o seu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um novo link de confirmação foi enviado para a sua conta de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor, veja o email de confirmação enviado para si.') }}
                    {{ __('Caso não tenha recebido o email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique para reenviar o link') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
