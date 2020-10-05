<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlanResource extends JsonResource
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
            'name'                  => $this->name,            
            'pre'                   => $this->pre,            
            'last_number'           => $this->last_number,
            'dependent_last_number' => $this->dependent_last_number,                    
        ];
    }
}
