<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function Color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function Laction(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function Year(): BelongsTo
    {
        return $this->belongsTo(Year::class);
    }
}
