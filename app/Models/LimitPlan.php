<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LimitPlan extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'limit_plan';

    /**
     * Get the Plan for the Limit.
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    /**
     * Get the Limit for the Plan.
     */
    public function limit()
    {
        return $this->belongsTo('App\Models\Limit');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
