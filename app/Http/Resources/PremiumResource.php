<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PremiumResource extends JsonResource
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
            'plan'              => $this->plan->name,        
            'principal'         => $this->principal,
            'dependent'         => $this->dependent,
            'group_principal'   => $this->group_principal,
            'group_dependent'   => $this->group_dependent,                   
        ];
    }
}
