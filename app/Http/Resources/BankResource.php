<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankResource extends JsonResource
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
            'id'        => $this->id,
            'name'      => $this->name,            
            'avatar'    => $this->avatar,// must display picture  
            'status'    => $this->status == 1 ? 'Active' : 'Inactive',  
        ];
    }
}
