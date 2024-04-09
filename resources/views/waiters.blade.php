@extends('layout')

@section('content')
    <div class="container">
        <h2>Список официантов:</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Номер телефона</th>
            </tr>
            </thead>
            <tbody>
            @foreach($waiters as $waiter)
                <tr>
                    <td>{{$waiter->id}}</td>
                    <td>{{$waiter->firstname}}</td>
                    <td>{{$waiter->lastname}}</td>
                    <td>{{$waiter->phonenumber}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
