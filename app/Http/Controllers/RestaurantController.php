<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Получите рестораны из базы данных
        $restaurants = Restaurant::query();

        // Если выбран тип кухни, фильтруем рестораны
        if ($request->has('cuisine')) {
            $restaurants->where('cuisine_type', $request->input('cuisine'));
        }

        // Получите все рестораны после применения фильтра
        $restaurants = $restaurants->get();

        // Получите доступные виды кухни из всех ресторанов
        $cuisines = Restaurant::distinct()->pluck('cuisine_type');

        // Сгруппируйте рестораны по типу кухни
        $restaurantsByCuisine = $restaurants->groupBy('cuisine_type');

        // Верните представление, передавая данные
        return view('restaurants', compact('restaurantsByCuisine', 'cuisines'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('restaurant', [
            'restaurant' => Restaurant::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
