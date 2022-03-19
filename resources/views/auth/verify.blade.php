@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificați adresa e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificare va fi trimis pe e-mailul dvs.') }}
                        </div>
                    @endif

                    {{ __('Verificați e-mailul.') }}
                    {{ __('Nu ați recepționat link-ul') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('apăsați pentru retrimiere') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
