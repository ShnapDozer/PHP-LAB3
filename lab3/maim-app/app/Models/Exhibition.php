<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'theme', 'description', 'start_date', 'end_date'];
  
    public function user(): BelongsTo {
        return $this->belongsTo(Theme::class);
    }
}
