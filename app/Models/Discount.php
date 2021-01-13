<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'coupon_code', 'percentage', 'campaign_id'
    ];

    /**
     * Get the campaign associated with the discount.
     */
    public function campaign()
    {
        return $this->hasOne(Campaign::class);
    }
}
