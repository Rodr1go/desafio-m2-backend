<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'group_id'
    ];

    /**
     * Get the group associated with the city.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
