@extends('layout')

@section('content')
<body>
<div class="container">
    <h2>Добавление записи</h2>
    <form method="post" action="{{url('reservation')}}">
        @csrf
        <input type="hidden" name="restaurant_id" value="{{ request()->query('restaurant_id') }}">
        <div class="form-group">
            <label for="table_id">Столик</label>
            <select class="form-control" id="table_id" name="table_id">
                @foreach ($tables as $table)
                    <option value="{{$table->id}}" {{ old('table_id') == $table->id ? 'selected' : '' }}>
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
                    <option value="{{$user->id}}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
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
                    <option value="{{$waiter->id}}" {{ old('waiter_id') == $waiter->id ? 'selected' : '' }}>
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
            <input type="datetime-local" class="form-control @error('dateandtime') is-invalid @enderror"
                   id="dateandtime" name="dateandtime" value="{{old('dateandtime')}}"/>
            @error('dateandtime')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
