<?php

namespace App\Models;

use App\Models\BaseThunderboltModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends BaseThunderboltModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        'created_at'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot(['quantity']);
    }
}
