<?php

namespace App\Http\Controllers\API;

use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\DiscountResource;

class DiscountController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discount::all();

        return $this->sendResponse(
            DiscountResource::collection($discounts),
            'Lista de descontos carregada com sucesso.'
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
        $discount = Discount::create($input);

        return $this->sendResponse(
            new DiscountResource($discount),
            'Desconto cadastrado com sucesso.'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        $discount->update($request->all());

        return $this->sendResponse(
            new DiscountResource($discount),
            'Dados de desconto atualizados com sucesso.'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return $this->sendResponse([], 'Desconto deletado com sucesso.');
    }
}
