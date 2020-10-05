<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'date_joined'           => $this->date_joined,
            'medical_aid_number'    => $this->medical_aid_number,
            'id_number'             => $this->id_number,
            'title'                 => $this->title,
            'username'              => $this->user->username ?? "",
            'email'                 => $this->user->email,
            'firstname'             => $this->firstname,
            'surname'               => $this->surname,
            'fullname'              => $this->firstname." ".$this->surname,
            'date_of_birth'         => $this->date_of_birth,
            'gender'                => $this->gender,
            'address'               => $this->address,
            'business_telephone'    => $this->business_telephone,
            'home_telephone'        => $this->home_telephone,
            'cellphone'             => $this->cellphone,
            'type'                  => $this->type,
            'principal'             => $this->principal->surname ?? "",
            'avatar'                => $this->avatar,//Must display picture
            'membership_status'     => $this->membership_status ? 'Active' : 'Lapsed' ,
            'card_status'           => $this->card_status ? 'Ready' : 'Not Ready',
            'referrer'              => $this->referrer->username ?? "",
            'branch'                => $this->branch->name ?? "",
            'plan'                  => $this->plan->name ?? "",            
            'group'                 => $this->group->name ?? "",
            'dependents'            => $this->dependents,
        ];
    }
}
