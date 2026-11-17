<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at')->orderByDesc('id');
    }
}
