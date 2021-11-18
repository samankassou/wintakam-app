<?php

namespace App\Models;

use App\Hasher;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Advert extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    const TYPE_RENT = 1;
    const TYPE_SALE = 2;

    const APPROVAL_PENDING = 1;
    const APPROVAL_APPROVED = 2;

    protected $guarded = [];

    protected $with = ['category', 'reviews', 'neighborhood.city'];

    public function host()
    {
        return $this->belongsTo(User::class, 'host_id');
    }

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(User::class, 'reviews', 'advert_id', 'user_id')
        ->withPivot('rating', 'comment')
        ->withTimestamps();
    }

    public function bookmarks()
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'advert_id', 'user_id')
        ->withTimestamps();
    }

    public function getBookmarksCount()
    {
        return $this->bookmarks()->count();
    }

    public function getReviewsCount()
    {
        return $this->reviews()->count();
    }

    public function ratingsAvg()
    {
        return $this->reviews->avg('pivot.rating');
    }

    public function getShortDescription()
    {
        return Str::substr($this->description, 0, 50);
    }

    public function getCryptedId()
    {
        return Hasher::encode($this->id);
    }
}
