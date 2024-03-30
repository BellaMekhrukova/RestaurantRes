<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table extends Model
{
    use HasFactory;
    public function restaurant(): BelongsTo
{
    return $this->belongsTo(Restaurant::class);
}
    public function reservation(): HasMany
    {
        return $this->hasmany(Reservation::class);
    }
}
