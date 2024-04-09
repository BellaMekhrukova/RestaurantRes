@extends('layout')
@section('content')
<body>
<div class="container">
    <h2>Список ресторанов:</h2>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование ресторана</th>
            <th>Адрес</th>
            <th>Номер телефона</th>
        </tr>
        </thead>
        <tbody>
        @foreach($restaurants as $restaurant)
            <tr>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->restaurantname}}</td>
                <td>{{$restaurant->address}}</td>
                <td>{{$restaurant->phonenumber}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
