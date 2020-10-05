<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'id'            => $this->id,
            'username'      => $this->user->username ?? "",
            'email'         => $this->user->email,
            'firstname'     => $this->firstname,
            'surname'       => $this->surname,
            'fullname'      => $this->firstname." ".$this->surname,
            'cellphone'     => $this->cellphone,
            'job_title'     => $this->job_title,
            'branch'        => $this->branch->name ?? "",
            'roles'         => RoleResource::collection($this->user->roles)->map->only('name'), 
        ];
    }
}
