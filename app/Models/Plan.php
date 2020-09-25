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

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
