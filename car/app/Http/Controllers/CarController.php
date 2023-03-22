<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car -> name = request('name');
        $car -> color = request('color');
        $car -> company = request('company');

        $car -> save();

        return redirect('/cars/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validatedData = request() -> validate([
            'name'  => ['required', 'min:3'],
            'color'  => 'required',
            'company'  => 'required'
        ]);

        // $car -> name = request('name');
        // $car -> color = request('color');
        // $car -> company = request('company');

        // $car -> save();
        $car -> update($validatedData);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car -> delete();
        return redirect('/cars');
    }
}
