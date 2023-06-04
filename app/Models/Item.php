<?php

namespace App\Models;

use App\Models\BaseThunderboltModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends BaseThunderboltModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    protected $hidden = [
        'created_at'
    ];

    public function locations()
    {
        return $this->belongsToMany(Location::class)->withPivot(['quantity']);
    }
}
