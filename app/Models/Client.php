<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

     /**
     * Get the Clients Bank details  for the client.
     */
    public function client_bank_details()
    {
        return $this->hasMany('App\Models\ClientBankDetail');
    }

    /**
     * Get the Plan for the client.
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    /**
     * Get the Referrer for the client.
     */
    public function referrer()
    {
        return $this->belongsTo('App\Models\User','referrer_id');
    }

    /**
     * Get the Branch for the client.
     */
    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    /**
     * Get the login details of client.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the creater of client.
     */
    public function creater()
    {
        return $this->belongsTo('App\Models\User','created_by');
    }

    /**
     * Get the group of client.
     */
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
