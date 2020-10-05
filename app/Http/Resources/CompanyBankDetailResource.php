<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyBankDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'branch'                => $this->branch->name,   
            'bank'                  => $this->bank->name,            
            'account_number'        => $this->account_number,      
            'branch_code'           => $this->branch_code,
            'account_holder_name'   => $this->account_holder_name,                    
        ];
    }
}
