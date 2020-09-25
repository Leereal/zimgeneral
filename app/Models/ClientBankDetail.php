<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClientBankDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the client of bank detail.
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * Get the bank of bank detail.
     */
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
