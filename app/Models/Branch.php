<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the Clients   for the branch.
     */
    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    /**
     * Get the Clients   for the branch.
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
