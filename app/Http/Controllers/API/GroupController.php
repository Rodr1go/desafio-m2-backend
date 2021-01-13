<?php

namespace App\Http\Controllers\API;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\GroupResource;

class GroupController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        return $this->sendResponse(
            GroupResource::collection($groups), 
            'Grupos de cidades listados com sucesso.'
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
        $group = Group::create($input);

        return $this->sendResponse(
            new GroupResource($group), 
            'Grupo cadastrado com sucesso.'
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return $this->sendResponse(
            new GroupResource($group), 
            'Grupo atualizado com sucesso.'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return $this->sendResponse([], 'Grupo removido com sucesso.');
    }
}
