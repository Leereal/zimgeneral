<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientBankDetailResource extends JsonResource
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
            'client'                => $this->client->firstname." ".$this->client->surname,   
            'bank'                  => $this->bank->name,            
            'account_number'        => $this->account_number,      
            'branch_code'           => $this->branch_code,
            'account_holder_name'   => $this->account_holder_name,                    
        ];
    }
}
