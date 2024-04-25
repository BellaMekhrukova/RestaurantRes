@extends('layout')
<link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
@section('content')
    <style>
        .restaurant-image {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        h2 {
            color: white
        }
    </style>
    <div class="container">
        <h2 class="text-center mt-4 mb-4">Список ресторанов:</h2>

        <!-- Форма для выбора типа кухни -->
        <form action="{{ route('restaurants') }}" method="GET" class="mb-4">
            <div class="form-group">
                <label for="cuisine">Выберите тип кухни:</label>
                <select name="cuisine" id="cuisine" class="form-control">
                    <option value="">Все кухни</option>
                    @foreach($cuisines as $cuisine)
                        <option value="{{ $cuisine }}">{{ $cuisine }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Применить фильтр</button>
        </form>

        <!-- Отображение отфильтрованных ресторанов -->
        @foreach($restaurantsByCuisine as $cuisine => $restaurants)
            <h3>{{ $cuisine }}</h3>
            <div class="row">
                @foreach($restaurants as $restaurant)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <a href="{{url('reservation/create')}}?restaurant_id={{ $restaurant->id }}"><img src="{{$restaurant->photo}}"
                                                                                                             class="card-img-top img-thumbnail restaurant-image"
                                                                                                             alt="Изображение ресторана"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{$restaurant->restaurantname}}</h5>
                                <p class="card-text">{{$restaurant->address}}</p>
                                <p class="card-text">{{$restaurant->phonenumber}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
