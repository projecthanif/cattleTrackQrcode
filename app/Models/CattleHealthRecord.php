<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CattleHealthRecord extends Model
{
    use HasFactory;

    protected $table = 'cattle_health_records';

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'medication' => 'array'
        ];
    }

    public function cattle(): BelongsTo
    {
        return $this->belongsTo(Cattle::class);
    }
}
