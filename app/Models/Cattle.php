<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cattle extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cattleHealthRecord():HasMany
    {
        return $this->hasMany(CattleHealthRecord::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'farmer_id', 'id');
    }
}
