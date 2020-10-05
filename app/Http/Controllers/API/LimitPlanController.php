<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LimitPlanResource;
use App\Models\LimitPlan;
use Illuminate\Http\Request;

class LimitPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LimitPlanResource::collection(LimitPlan::paginate(25));
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
            'plan_id'           =>['required', 'integer'],
            'limit_id'          =>['required', 'integer'],     
            'yearly_amount'     =>'between:0,99.99|required',  
            'monthly_amount'    =>'between:0,99.99|required',                         
        ]);

        $limitplan                  =   new LimitPlan;
        $limitplan->plan_id         =   $request->plan_id;
        $limitplan->limit_id        =   $request->limit_id;
        $limitplan->amount_yearly   =   $request->yearly_amount;
        $limitplan->amount_monthly  =   $request->monthly_amount;    

        if ($limitplan->save()) {
            return new LimitPlanResource($limitplan);
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
        return new LimitPlanResource(LimitPlan::find($id));
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
            'plan_id'           =>['required', 'integer'],
            'limit_id'          =>['required', 'integer'],     
            'yearly_amount'     =>'between:0,99.99|required',  
            'monthly_amount'    =>'between:0,99.99|required',                         
        ]);

        $limitplan                  =   LimitPlan::findOrFail($id);
        $limitplan->plan_id         =   $request->plan_id;
        $limitplan->limit_id        =   $request->limit_id;
        $limitplan->amount_yearly   =   $request->yearly_amount;
        $limitplan->amount_monthly  =   $request->monthly_amount;     

        if ($limitplan->save()) {
            return new LimitPlanResource($limitplan);
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
        // if(user is able to delete){
            $limitplan = LimitPlan::findOrFail($id);
            if($limitplan->delete()){
                return new LimitPlanResource($limitplan);   
            }
        // }        
        // else{
        //     return response()->json(['error' => 'You can only delete your own books.'], 403); 
        // }
    }
}
