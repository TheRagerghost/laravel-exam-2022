@extends('layouts.main')

@section('content')
    <form action="{{route('mythings.update',$thing->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group" style="margin-top: 20px; margin-bottom: 20px; width: 30%">
            <h3 class="h3">Отдать пользователю</h3>
            <select class="form-select" aria-label="Default select example" name="user_id">
                @foreach($users as $user)
                @if ($user->id != Auth::user()->id)
                    <option value="{{$user->id}}" selected>{{$user->name}}</option>
                @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Передать</button>
    </form>
@endsection
