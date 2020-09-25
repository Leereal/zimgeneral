<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProvider extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the login details of Service Provider.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the Service Provider Bank details  for the Service Provider.
     */
    public function sp_bank_details()
    {
        return $this->hasMany('App\Models\ClientBankDetail');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
