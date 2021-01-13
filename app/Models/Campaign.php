<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status',
    ];

    /**
     * Get the discount associated with the campaign.
     */
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
    
    /**
     * Get the product associated with the campaign.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
