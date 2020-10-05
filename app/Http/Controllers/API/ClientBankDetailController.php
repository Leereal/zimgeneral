<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientBankDetailResource;
use App\Models\ClientBankDetail;
use Illuminate\Http\Request;

class ClientBankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientbankdetails = ClientBankDetail::active()->latest()->get();
        
        return ClientBankDetailResource::collection($clientbankdetails);
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
            'client_id'             =>['required', 'integer'],
            'account_holder_name'   =>'min:2|string|nullable',
            'branch_code'           =>'min:2|string|nullable',
            'account_number'        =>'string|required'                
        ]);

        $clientbankdetail                           =   new ClientBankDetail;
        $clientbankdetail->bank_id                  =   $request->bank_id;
        $clientbankdetail->client_id                =   $request->client_id;
        $clientbankdetail->account_number           =   $request->account_number;
        $clientbankdetail->branch_code              =   $request->branch_code;
        $clientbankdetail->account_holder_name      =   $request->account_holder_name;
        if($clientbankdetail->save()){
            return new ClientBankDetailResource($clientbankdetail);
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
        $clientbankdetail = ClientBankDetail::find($id);             
        return new ClientBankDetailResource($clientbankdetail);
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

        $clientbankdetail                           =   ClientBankDetail::findOrFail($id);
        $clientbankdetail->bank_id                  =   $request->bank_id;        
        $clientbankdetail->account_number           =   $request->account_number;
        $clientbankdetail->branch_code              =   $request->branch_code;
        $clientbankdetail->account_holder_name      =   $request->account_holder_name;
        if($clientbankdetail->save()){
            return new ClientBankDetailResource($clientbankdetail);
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
        $clientbankdetail = ClientBankDetail::findOrFail($id);
        if($clientbankdetail->delete()){
            return new ClientBankDetailResource($clientbankdetail);   
        }
    }
}
