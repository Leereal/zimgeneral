<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the Clients for the Plan.
     */
    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    /**
     * The limits that belong to the plan.
     */
    public function limits()
    {
        return $this->belongsToMany('App\Models\Limit');
    }

    /**
     * Get the premium record associated with the plan.
     */
    public function premium()
    {
        return $this->hasOne('App\Models\Premium');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
