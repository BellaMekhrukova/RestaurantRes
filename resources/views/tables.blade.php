@extends('layout')

@section('content')
    <div class="container">
        <h2>Список столов</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Место стола</th>
                <th>Номер стола</th>
                <th>Название ресторана</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tables as $table)
                <tr>
                    <td>{{$table->id}}</td>
                    <td>{{$table->countplace}}</td>
                    <td>{{$table->number}}</td>
                    <td>{{$table->restaurant->restaurantname}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
