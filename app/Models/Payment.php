<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * Get the Branch for the Employee.
     */
    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    /**
     * Get the Employee who captured this payment
     */
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }

    /**
     * Get the plan paid for.
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    /**
     * Get the Client for the payment.
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * Get the payment method used for the payment.
     */
    public function payment_method()
    {
        return $this->belongsTo('App\Models\PaymentMethod');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
