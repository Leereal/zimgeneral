<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the Clients for the group.
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
