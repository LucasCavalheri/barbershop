<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarbershopOpeningHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'barbershop_id',
        'day_of_week',
        'opens_at',
        'closes_at',
    ];

    public function barbershop(): BelongsTo
    {
        return $this->belongsTo(Barbershop::class);
    }
}
