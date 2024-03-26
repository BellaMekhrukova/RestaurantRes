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
<h2>Список столов</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Место стола</td>
    <td>Номер стола</td>
    <td>Название ресторана</td>
    </thead>
    @foreach($tables as $table)
        <tr>
            <td>{{$table->id}}</td>
            <td>{{$table->countplace}}</td>
            <td>{{$table->number}}</td>
            <td>{{$table->restaurant->restaurantname}}</td>
        </tr>

    @endforeach
</table>
</body>
</html><?php
