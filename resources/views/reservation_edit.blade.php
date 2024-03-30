<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изменение брони</title>
</head>
<body>
<h2>Изменение записи</h2>
<form method="post" action="{{url('reservation/update/'.$reservation->id)}}"/>
@csrf
<label>Столик</label>
<select name="table_id" value="{{$reservation->table_id}}">
    <option style="...">
    @foreach ($tables as $table)
        <option value="{{$table->id}}" {{ $reservation->table_id == $table->id ? 'selected' : '' }}>{{$table->number}}</option>
    @endforeach
</select>
@error('table_num')
<div class="is=invalid">{{$message}}</div>
@enderror
<br>
<label>Клиент</label>
<select name="user_id" value="{{$reservation->user_id}}">
    <option style="...">
    @foreach ($users as $user)
        <option value="{{$user->id}}" {{ $reservation->user_id == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
    @endforeach
</select>
@error('user_id')
<div class="is=invalid">{{$message}}</div>
@enderror
<br>
<label>Официант</label>
<select name="waiter_id" value="{{$reservation->waiter_id}}">
    <option style="...">
    @foreach ($waiters as $waiter)
        <option value="{{$waiter->id}}" {{ $reservation->waiter_id == $waiter->id ? 'selected' : '' }}>{{$waiter->lastname}}</option>
    @endforeach
</select>
@error('waiter_id')
<div class="is=invalid">{{$message}}</div>
@enderror
<br>
<label for="dateandtime" class="form-label">Время бронирования</label>
<input type="datetime-local" class="form-control @error('dateandtime') is-invalid @enderror"
       name="dateandtime" aria-describedby="nameHelp" value="{{$reservation->dateandtime}}"/>
@error('dateandtime')
<div class="invalid-feedback">{{$message}}</div>
@enderror
<input type="submit">
</body>
</html>