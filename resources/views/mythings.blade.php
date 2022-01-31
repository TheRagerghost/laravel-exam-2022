@extends('layouts.main')<!--Говорим, какой лейаут использовать как базу для этой страницы-->
<!--Директива section с идентификатором, в случае совпадения этого идентификатора и требуемого, подставит содержимое в лейаут-->
@section('content')
    <div>
        <h1 class="h-25">Мои предметы: </h1>
        <div style="flex-wrap: wrap; display: flex; border-top: 2px solid blue;">
            @foreach($my_things as $thing)
                <div class="card" style="margin-right: 30px;flex: 0 0 20%; margin-top: 30px">
                    <div class="card-body">
                        <h5 class="card-title">{{$thing->name}}</h5>
                        <p class="card-text">{{$thing->description}}</p>
                        <a href="{{route('mythings.show',$thing->id)}}" class="card-link">Развернуть...</a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
