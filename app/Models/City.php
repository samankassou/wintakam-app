<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class);
    }

    public function adverts()
    {
        return $this->hasManyThrough(Advert::class, Neighborhood::class);
    }
}
