<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->latest()->get();
        
        return PlanResource::collection($plans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  => ['required', 'string', 'max:255'],
            'pre'                   => ['required', 'string', 'max:20'],
            'last_number'           => ['required', 'integer', 'max:10'],
            'dependent_last_number' => ['required', 'integer', 'max:10'],                    
        ]);

        $plan                          =   new Plan;
        $plan->name                    =   $request->name;
        $plan->pre                     =   $request->pre;
        $plan->last_number             =   $request->last_number;
        $plan->dependent_last_number   =   $request->dependent_last_number;
        if($plan->save()){
            return new PlanResource($plan);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);             
        return new PlanResource($plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'                  => ['required', 'string', 'max:255'],
            'pre'                   => ['required', 'string', 'max:20'],
            'last_number'           => ['required', 'integer', 'max:10'],
            'dependent_last_number' => ['required', 'integer', 'max:10'],                    
        ]);

        $plan                          =   Plan::findOrFail($id);
        $plan->name                    =   $request->name;
        $plan->pre                     =   $request->pre;
        $plan->last_number             =   $request->last_number;
        $plan->dependent_last_number   =   $request->dependent_last_number;
        if($plan->save()){
            return new PlanResource($plan);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        if($plan->delete()){
            return new PlanResource($plan);   
        }
    }
}
