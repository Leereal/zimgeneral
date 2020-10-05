<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentMethodResource;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaymentMethodResource::collection(PaymentMethod::paginate(25));
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
            'name'            =>'string|required',                         
        ]);

        $payment            =   new PaymentMethod;
        $payment->name      =   $request->name;    

        if ($payment->save()) {
            return new PaymentMethodResource($payment);
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
        return new PaymentMethodResource(PaymentMethod::find($id));
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
            'name'            =>'string|required',                         
        ]);

        $payment            =   PaymentMethod::findOrFail($id);
        $payment->name      =   $request->name;    

        if ($payment->save()) {
            return new PaymentMethodResource($payment);
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
            $payment = PaymentMethod::findOrFail($id);
            if($payment->delete()){
                return new PaymentMethodResource($payment);   
            }
        // }        
        // else{
        //     return response()->json(['error' => 'You can only delete your own books.'], 403); 
        // }
    }
}
