@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтверждение е-мейла') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Сыылка подтверждения аккаунта была выслана на ваш е-мейл.') }}
                        </div>
                    @endif

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Прислать новую ссылку') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
