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
<h2>{{$restaurant ? "Список столов в ресторане ".$restaurant->restaurantname : 'Неверное ID ресторана'}}</h2>
@if($restaurant)
    <table border="1">
    <thead>
        <td>id</td>
        <td>Место стола</td>
        <td>Номер</td>
    </thead>
@foreach($restaurant->tables as $table)
    <tr>
        <td>{{$table->id}}</td>
        <td>{{$table->countplace}}</td>
        <td>{{$table->number}}</td>
    </tr>
@endforeach
    </table>
@endif
</body>
</html>
