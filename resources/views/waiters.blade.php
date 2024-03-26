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
<h2>Список официантов:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Номер телефона</td>
    </thead>
    @foreach($waiters as $waiter)
        <tr>
            <td>{{$waiter->id}}</td>
            <td>{{$waiter->firstname}}</td>
            <td>{{$waiter->lastname}}</td>
            <td>{{$waiter->phonenumber}}</td>
        </tr>

    @endforeach
</table>
</body>
</html>

