<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

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

    public function ratingsAvg()
    {
        return $this->reviews->avg('pivot.rating');
    }
}
