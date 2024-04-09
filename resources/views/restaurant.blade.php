<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>60501mik</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>
        {{$restaurant ? "Список столов в ресторане ".$restaurant->restaurantname : 'Неверное ID ресторана'}}
    </h2>
    @if($restaurant)
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Место стола</th>
                <th>Номер</th>
            </tr>
            </thead>
            <tbody>
            @foreach($restaurant->tables as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>{{$table->countplace}}</td>
                    <td>{{$table->number}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
