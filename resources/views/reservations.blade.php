@extends('layout')

@section('content')
    <div class="container">
        <h2>Бронирование:</h2>
        @foreach($reservationsByRestaurant as $restaurantName => $reservations)
            <h2>{{ $restaurantName }}</h2>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Имя гостя</th>
                    <th>Номер стола</th>
                    <th>Дата и время</th>
                    <th>Фамилия официанта</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->id}}</td>
                        <td>{{$reservation->user->name}}</td>
                        <td>{{$reservation->table->number}}</td>
                        <td>{{$reservation->dateandtime}}</td>
                        <td>{{$reservation->waiter->lastname}}</td>
                        <td>
                            <a href="{{url('reservation/destroy/'.$reservation->id)}}" class="btn btn-danger">Удалить</a>
                            <a href="{{url('reservation/edit/'.$reservation->id)}}" class="btn btn-primary">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
