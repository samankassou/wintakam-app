<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adverts()
    {
        return $this->hasMany(Advert::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Advert::class, 'reviews', 'user_id', 'advert_id')
        ->withPivot('rating', 'comment')
        ->withTimestamps();
    }

    public function bookmarks()
    {
        return $this->belongsToMany(Advert::class, 'bookmarks', 'user_id', 'advert_id')
        ->withTimestamps();
    }

    public function getBookmarksCount()
    {
        return $this->bookmarks()->count();
    }

}
