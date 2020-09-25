<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the Branch for the Employee.
     */
    public function branch()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the login details of employee.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
