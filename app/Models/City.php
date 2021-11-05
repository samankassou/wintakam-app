<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class City extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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
