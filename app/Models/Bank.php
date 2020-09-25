<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use HasFactory;
    use SoftDeletes;

     /**
     * Get the Clients Bank details  for the bank.
     */
    public function client_bank_details()
    {
        return $this->hasMany('App\Models\ClientBankDetail');
    }

    /**
     * Get the Service Providers Bank details  for the bank.
     */
    public function sp_bank_details()
    {
        return $this->hasMany('App\Models\SPBankDetail');
    }

    /**
     * Get the Company Bank details  for the bank.
     */
    public function company_bank_details()
    {
        return $this->hasMany('App\Models\CompanyBankDetail');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
