@extends('layout')
@section('content')
    <div class="position-relative">
        <!-- Текст, надвисающий над изображением -->
        <div class="overlay">
            <h1 class="display-4 text-white text-center">Добро пожаловать в удивительный мир кулинарии!</h1>
            <p class="lead text-white text-center">Выберите ресторан:</p>
            <div class="text-center">
                <a href="{{ url('/restaurants') }}" class="btn btn-primary btn-lg rounded-pill border-dark bg-white text-dark">Выбрать ресторан</a>
            </div>
        </div>
    </div>
@endsection

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('http://lischannel.ru/wp-content/uploads/2023/02/hedonist6527-2048x1366.jpg');
            background-size: cover;
            background-position: center;
            opacity: 90%;
            height: 100vh;
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
            text-align: center;
            margin-top: 100px; /* Замените значение на высоту вашей шапки */
        }

        .btn {
            opacity: 0.8; /* Немного прозрачности */
            border: 2px solid black; /* Черные края */
        }
    </style>





