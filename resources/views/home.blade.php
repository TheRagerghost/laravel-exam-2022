@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="btn btn-primary" style=";margin-top: 10px"><a class="text-white"  href="{{route('main')}}">Вход на сайт</a></div>

        </div>
    </div>
</div>
@endsection
