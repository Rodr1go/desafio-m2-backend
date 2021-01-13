<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'campaign_id'
    ];

    /**
     * Get the campaign associated with the product.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
