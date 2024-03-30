<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['table_id', 'waiter_id', 'user_id', 'id','dateandtime'];
    public $timestamps = false;
    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function waiter(): BelongsTo
    {
        return $this->belongsTo(Waiter::class);
    }
}
