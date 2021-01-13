<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'campaign_id'
    ];

    /**
     * Get the cites associated with the group.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Get the campaign associated with the group.
     */
    public function campaign()
    {
        return $this->hasOne(Campaign::class);
    }
}
