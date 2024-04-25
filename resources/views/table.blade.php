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
<style>h2, td{color: white}</style>

<h2>{{$table ? "Информация о столе № ".$table->number : 'Неверный ID стола' }}</h2>
@if($table)
<table border="1">
    <thead>
    <td>id</td>
    <td>Номер гостя</td>
    <td>Дата и время</td>
    <td>Официант</td>
    </thead>
    @foreach($table->reservation as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->user_id}}</td>
            <td>{{$reservation->dateandtime}}</td>
            <td>{{$reservation->waiter_id}}</td>
        </tr>

    @endforeach
</table>
@endif
</body>
</html><?php
