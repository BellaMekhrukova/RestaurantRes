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
<h2>Пользователь:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Имя пользователя</td>
    <td>Почта</td>
    <td>Пароль пользователя</td>
    <td>Номер телефона</td>
    <td>Возраст</td>
    </thead>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phonenumber}}</td>
            <td>{{$user->age}}</td>
        </tr>

    @endforeach
</table>
</body>
</html>
