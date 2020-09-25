<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyBankDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get the branch of bank detail.
     */
    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
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

