<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Limit extends Model
{
    use HasFactory,SoftDeletes;
    
    /**
     * The plans that belong to the limit.
     */
    public function plans()
    {
        return $this->belongsToMany('App\Models\Plan');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
