<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LimitPlanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        //return parent::toArray($request);
        return [
            'id'                => $this->id,            
            'plan'              => $this->plan->name,
            'limit'             => $this->limit->name,
            'yearly_limit'      => $this->amount_yearly,
            'monthly_limit'     => $this->amount_monthly,                   
        ];
    }
}
