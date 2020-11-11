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
            'username'      => $this->employee_code,
            'email'         => $this->user->email ?? "",
            'firstname'     => $this->firstname,
            'surname'       => $this->surname,
            'fullname'      => $this->firstname." ".$this->surname,
            'cellphone'     => $this->cellphone,
            'job_title'     => $this->job_title,
            'branch'        => $this->branch->name ?? "",
            'roles'         => ($this->user->email ?? "")<>"" ? RoleResource::collection($this->user->roles)->map->only('name') : "", 
            'status'        => $this->status == 1 ? 'Active' : 'Inactive',
        ];
    }
}
