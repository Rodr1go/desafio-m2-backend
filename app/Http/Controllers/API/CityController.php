<?php

namespace App\Http\Controllers\API;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\CityResource;

class CityController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

        return $this->sendResponse(
            CityResource::collection($cities), 
            'Lista de cidades carregada com sucesso.'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $city = City::create($input);

        return $this->sendResponse(
            new CityResource($city),
            'Cidade cadastrada com sucesso.'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        return $this->sendResponse(
            new CityResource($city),
            'Cidade atualizada com sucesso.'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return $this->sendResponse([], 'Cidade deletada com sucesso.');
    }
}
