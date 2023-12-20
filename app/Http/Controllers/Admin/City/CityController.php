<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\CityCreateRequest;
use App\Http\Requests\City\CityUpdateRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.city', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityCreateRequest $request)
    {
        $data = $request->validated();
        City::firstOrCreate($data);
        return redirect()->route('home.city.city');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return view('admin.city.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityUpdateRequest $request, City $city)
    {
        $data = $request->validated();
        $city->update($data);
        return redirect()->route('home.city.city.show', compact('city'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('home.city.city');
    }
}
