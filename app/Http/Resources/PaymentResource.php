<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'id'                => $this->id,
            'client'            => $this->client->firstname." ".$this->client->surname,   
            'amount'            => $this->amount,            
            'description'       => $this->description,      
            'receipt_number'    => $this->receipt_number,
            'ref_number'        => $this->ref_number,  
            'date_paid'         => $this->date_paid, 
            'month_paid_for'    => $this->month_paid_for, 
            'employee'          => $this->employee->user->username, 
            'branch'            => $this->branch->name,
            'plan'              => $this->plan->name,
            'payment_method'    => $this->payment_method->name,
            'ipaddress'         => $this->ipaddress,
            'status'            => $this->status,                  
        ];
    }
}
