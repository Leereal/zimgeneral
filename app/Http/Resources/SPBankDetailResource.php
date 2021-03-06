<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SPBankDetailResource extends JsonResource
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
            'service_provider'      => $this->service_provider->name,   
            'bank'                  => $this->bank->name,            
            'account_number'        => $this->account_number,      
            'branch_code'           => $this->branch_code,
            'account_holder_name'   => $this->account_holder_name,                    
        ];
    }
}
