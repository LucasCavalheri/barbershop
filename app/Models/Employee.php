<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'email',
        'barbershop_id',
    ];

    public function barbershop(): BelongsTo
    {
        return $this->belongsTo(Barbershop::class);
    }
}
