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
<h2>{{$user ? "Имя пользователей ".$user->name : 'Неверный ID пользователя' }}</h2>
@if($user)
    <table border="1">
        <thead>
        <td>id</td>
        <td>Номер столика</td>
        <td>Дата и время</td>
        </thead>
        @foreach($user->reservation as $reservation)
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->table->number}}</td>
                <td>{{$reservation->dateandtime}}</td>
            </tr>

        @endforeach
    </table>
@endif
</body>
</html><?php
