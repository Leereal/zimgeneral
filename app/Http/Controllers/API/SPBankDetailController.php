<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SPBankDetailResource;
use App\Models\SPBankDetail;
use Illuminate\Http\Request;

class SPBankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spbankdetails = SPBankDetail::active()->latest()->get();
        
        return SPBankDetailResource::collection($spbankdetails);
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
            'bank_id'               =>['required', 'integer'],
            'service_provider_id'   =>['required', 'integer'],
            'account_holder_name'   =>'min:2|string|nullable',
            'branch_code'           =>'min:2|string|nullable',
            'account_number'        =>'string|required'                
        ]);

        $spbankdetail                           =   new SPBankDetail;
        $spbankdetail->bank_id                  =   $request->bank_id;
        $spbankdetail->service_provider_id      =   $request->service_provider_id;
        $spbankdetail->account_number           =   $request->account_number;
        $spbankdetail->branch_code              =   $request->branch_code;
        $spbankdetail->account_holder_name      =   $request->account_holder_name;
        if($spbankdetail->save()){
            return new SPBankDetailResource($spbankdetail);
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
        $spbankdetail = SPBankDetail::find($id);             
        return new SPBankDetailResource($spbankdetail);
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
            'bank_id'               =>['required', 'integer'],       
            'account_holder_name'   =>'min:2|string|nullable',
            'branch_code'           =>'min:2|string|nullable',
            'account_number'        =>'string|required'                
        ]);

        $spbankdetail                           =   SPBankDetail::findOrFail($id);
        $spbankdetail->bank_id                  =   $request->bank_id;        
        $spbankdetail->account_number           =   $request->account_number;
        $spbankdetail->branch_code              =   $request->branch_code;
        $spbankdetail->account_holder_name      =   $request->account_holder_name;
        if($spbankdetail->save()){
            return new SPBankDetailResource($spbankdetail);
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
        $spbankdetail = SPBankDetail::findOrFail($id);
        if($spbankdetail->delete()){
            return new SPBankDetailResource($spbankdetail);   
        }
    }
}
