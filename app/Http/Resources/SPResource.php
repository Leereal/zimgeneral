<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SPResource extends JsonResource
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
            'username'          => $this->user->username ?? "",            
            'name'              => $this->name,
            'contact_person'    => $this->contact_person,
            'ahfoz_number'      => $this->ahfoz_number,
            'cellphone'         => $this->cellphone,
            'phone'             => $this->phone,
            'address'           => $this->address,
            'email'             => $this->user->email,            
        ];
    }
}
