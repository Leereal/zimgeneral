<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PremiumResource;
use App\Models\Premium;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PremiumResource::collection(Premium::paginate(25));
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
            'principal'         =>'between:0,99.99|required',
            'dependent'         =>'between:0,99.99|required',
            'group_principal'   =>'between:0,99.99|required',  
            'group_dependent'   =>'between:0,99.99|required'            
        ]);

        $premium                        =   new Premium;
        $premium->plan_id               =   $request->plan_id;
        $premium->principal             =   $request->principal;
        $premium->dependent             =   $request->dependent;
        $premium->group_principal       =   $request->group_principal;
        $premium->group_dependent       =   $request->group_dependent;    

        if ($premium->save()) {
            return new PremiumResource($premium);
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
        return new PremiumResource(Premium::find($id));
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
            'principal'         =>'between:0,99.99|required',
            'dependent'         =>'between:0,99.99|required',
            'group_principal'   =>'between:0,99.99|required',  
            'group_dependent'   =>'between:0,99.99|required'            
        ]);

        $premium                        =   Premium::findOrFail($id); 
        $premium->principal             =   $request->principal;
        $premium->dependent             =   $request->dependent;
        $premium->group_principal       =   $request->group_principal;
        $premium->group_dependent       =   $request->group_dependent;    

        if ($premium->save()) {
            return new PremiumResource($premium);
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
            $premium = Premium::findOrFail($id);
            if($premium->delete()){
                return new PremiumResource($premium);   
            }
        // }        
        // else{
        //     return response()->json(['error' => 'You can only delete your own books.'], 403); 
        // }
    }
}
