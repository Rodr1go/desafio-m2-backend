<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'percentage' => $this->percentage,
            'coupon_code' => $this->coupon_code,
            'campaign_id' => $this->campaign_id,
        ];
    }
}
