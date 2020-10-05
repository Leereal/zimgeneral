<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
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
            'name'              => $this->name,
            'contact_person'    => $this->contact_person,
            'email'             => $this->email,
            'phone'             => $this->phone,          
        ];
    }
}
