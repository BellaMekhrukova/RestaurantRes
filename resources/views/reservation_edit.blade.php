@extends('layout')

@section('content')
    <div class="container">
        <h2>Изменение записи</h2>
        <form method="post" action="{{url('reservation/update/'.$reservation->id)}}" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="table_id">Столик</label>
                <select class="form-control" id="table_id" name="table_id">
                    @foreach ($tables as $table)
                        <option value="{{$table->id}}" {{ $reservation->table_id == $table->id ? 'selected' : '' }}>
                            {{$table->number}}
                        </option>
                    @endforeach
                </select>
                @error('table_id')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="user_id">Клиент</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}" {{ $reservation->user_id == $user->id ? 'selected' : '' }}>
                            {{$user->name}}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="waiter_id">Официант</label>
                <select class="form-control" id="waiter_id" name="waiter_id">
                    @foreach ($waiters as $waiter)
                        <option value="{{$waiter->id}}" {{ $reservation->waiter_id == $waiter->id ? 'selected' : '' }}>
                            {{$waiter->lastname}}
                        </option>
                    @endforeach
                </select>
                @error('waiter_id')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="dateandtime">Время бронирования</label>
                <input type="datetime-local" class="form-control @error('dateandtime') is-invalid @enderror" id="dateandtime" name="dateandtime" aria-describedby="nameHelp" value="{{$reservation->dateandtime}}">
                @error('dateandtime')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
