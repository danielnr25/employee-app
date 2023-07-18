<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Models\City;
use App\Models\State;
use App\Tables\Cities;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.cities.index',[
            'cities' => Cities::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = SpladeForm::make()
            ->action(route('admin.cities.store'))
            ->fields([
                Input::make('name')->label('Nombre'),
                Select::make('state_id')
                    ->label('Estado')
                    ->options(State::pluck('name', 'id')->toArray()),
                Submit::make()->label('Registrar')
            ])->class('space-y-4');
        return view('admin.cities.create',[
            'form' =>$form
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        City::create($request->validated());
        Splade::toast('Ciudad registrada correctamente')->autoDismiss(3);
        return redirect()->route('admin.cities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $form = SpladeForm::make()
            ->action(route('admin.cities.update', $city))
            ->method('PUT')
            ->fields([
                Input::make('name')->label('Nombre'),
                Select::make('state_id')
                    ->label('Estado')
                    ->options(State::pluck('name', 'id')->toArray()),
                Submit::make()->label('Modificar')
            ])
            ->fill($city)
            ->class('space-y-4');

        return view('admin.cities.edit',[
            'form' =>$form
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCityRequest $request, City $city)
    {
        $city->update($request->validated());

        Splade::toast('Ciudad actualizada')->autoDismiss(3);

        return to_route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        Splade::toast('Ciudad eliminada correctamente')->autoDismiss(3);
        return back();
    }
}
