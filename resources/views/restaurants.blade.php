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
    <h2>Список ресторанов:</h2>
    <table border="1">
        <thead>
        <td>id</td>
        <td>Наименование ресторанов</td>
        <td>Адрес</td>
        <td>Номер телефона</td>
        </thead>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->restaurantname}}</td>
                <td>{{$restaurant->address}}</td>
                <td>{{$restaurant->phonenumber}}</td>
            </tr>

        @endforeach
    </table>
</body>
</html>
