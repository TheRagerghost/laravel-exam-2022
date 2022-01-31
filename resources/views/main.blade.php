@extends('layouts.main')
@section('content')
    <div>
        <h1 class="h-25" style="margin-top: 30px">Предметы: </h1>
        <div style="flex-wrap: wrap; display: flex; border-top: 2px solid blue;">
            @foreach($things as $thing)
                <div class="card" style="margin-right: 30px;flex: 0 0 20%; margin-top: 30px">
                    <div class="card-body">
                        <h5 class="card-title">{{$thing->name}}</h5>
                        <p class="card-text">{{$thing->description}}</p>
                        <a href="{{route('things.show',$thing->id)}}" class="card-link">Развернуть...</a>
                    </div>
                </div>

            @endforeach
        </div>
        <h1 class="h-25" style="margin-top: 30px">Места: </h1>
        <div style="flex-wrap: wrap; display: flex; border-top: 2px solid red;">
            @foreach($places as $place)
                <div class="card" style="margin-right: 30px;flex: 0 0 20%; margin-top: 30px">
                    <div class="card-body">
                        <h5 class="card-title">{{$place->name}}</h5>
                        <p class="card-text">{{$place->description}}</p>
                        <a href="{{route('places.show',$place->id)}}" class="card-link">Развернуть...</a>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
@endsection
