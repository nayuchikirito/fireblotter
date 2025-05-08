<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Station extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];
    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
