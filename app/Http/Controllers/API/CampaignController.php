<?php

namespace App\Http\Controllers\API;

use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\CampaignResource;

class CampaignController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        
        return $this->sendResponse(
            CampaignResource::collection($campaigns), 
            'Lista carregada com sucesso.'
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
        $campaign = Campaign::create($input);

        return $this->sendResponse(
            new CampaignResource($campaign), 
            'Campanha cadastrada com sucesso.'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $campaign->update($request->all());

        return $this->sendResponse(
            new CampaignResource($campaign), 
            'Campanha atualizada com sucesso.'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return $this->sendResponse([], 'Campanha deletada com sucesso.');
    }
}
