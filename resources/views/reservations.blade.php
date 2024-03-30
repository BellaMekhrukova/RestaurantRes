<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>60501mik</title>
</head>
<body>
<h2>Бронирование:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Имя гостя</td>
    <td>Номер стола</td>
    <td>Дата и время</td>
    <td>Фамилия официанта</td>
    </thead>
    @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->user->name}}</td>
            <td>{{$reservation->table->number}}</td>
            <td>{{$reservation->dateandtime}}</td>
            <td>{{$reservation->waiter->lastname}}</td>
            <td><a href="{{url('reservation/destroy/'.$reservation->id)}}">Удалить</a>
                <a href="{{url('reservation/edit/'.$reservation->id)}}">Редактировать</a>
            </td>
        </tr>

    @endforeach
</table>
</body>
</html>
