<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Premium extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'premiums';

    /**
     * Get the plan that owns the premium.
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
