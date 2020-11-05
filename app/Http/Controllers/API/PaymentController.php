<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PaymentResource::collection(Payment::latest()->get());
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
            'payment_method_id' =>['required', 'integer'],
            'client_id'         =>['required', 'integer'],
            'amount'            =>'string|required',
            'ref_number'        =>'string|nullable',
            'month_paid_for'    =>'string|required',  
            'date_paid'         =>'date|required'                
        ]);

        $payment                        =   new Payment;
        $payment->payment_method_id     =   $request->payment_method_id;
        $payment->client_id             =   $request->client_id;
        $payment->amount                =   $request->amount;
        $payment->description           =   "Payment";
        $payment->receipt_number        =   "RC".Carbon::now()->timestamp;
        $payment->ref_number            =   $request->ref_number;
        $payment->month_paid_for        =   $request->month_paid_for;
        $payment->date_paid             =   $request->date_paid;
        $payment->employee_id           =   1;//auth('api')->user()->employee->id;
        $payment->branch_id             =   1;//auth('api')->user()->branch->id;
        $payment->plan_id               =   1;//auth('api')->user()->plan->id;
        $payment->ipAddress             =   request()->ip();

        if ($payment->save()) {
            return new PaymentResource($payment);
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
        return new PaymentResource(Payment::find($id));
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
            'payment_method_id' =>['required', 'integer'],
            'amount'            =>'string|required',
            'ref_number'        =>'string|nullable',
            'month_paid_for'    =>'string|required',  
            'date_paid'         =>'date|required'                
        ]);

        $payment                        =   Payment::findOrFail($id);
        $payment->payment_method_id     =   $request->payment_method_id;   
        $payment->amount                =   $request->amount;        
        $payment->ref_number            =   $request->ref_number;
        $payment->month_paid_for        =   $request->month_paid_for;
        $payment->date_paid             =   $request->date_paid;
        $payment->ipAddress             =   request()->ip();

        if ($payment->save()) {
            return new PaymentResource($payment);
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
            $payment = Payment::findOrFail($id);
            if($payment->delete()){
                return new PaymentResource($payment);   
            }
        // }        
        // else{
        //     return response()->json(['error' => 'You can only delete your own books.'], 403); 
        // }
    }
}
