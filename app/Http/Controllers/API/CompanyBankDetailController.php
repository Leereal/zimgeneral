<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyBankDetailResource;
use App\Models\CompanyBankDetail;
use Illuminate\Http\Request;

class CompanyBankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companybankdetails = CompanyBankDetail::active()->latest()->get();
        
        return CompanyBankDetailResource::collection($companybankdetails);
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
            'branch_id'             =>['required', 'integer'],
            'account_holder_name'   =>'min:2|string|nullable',
            'branch_code'           =>'min:2|string|nullable',
            'account_number'        =>'string|required'                
        ]);

        $companybankdetail                          =   new CompanyBankDetail;
        $companybankdetail->bank_id                  =   $request->bank_id;
        $companybankdetail->branch_id                =   $request->branch_id;
        $companybankdetail->account_number           =   $request->account_number;
        $companybankdetail->branch_code              =   $request->branch_code;
        $companybankdetail->account_holder_name      =   $request->account_holder_name;
        if($companybankdetail->save()){
            return new CompanyBankDetailResource($companybankdetail);
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
        $companybankdetail = CompanyBankDetail::find($id);             
        return new CompanyBankDetailResource($companybankdetail);
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

        $companybankdetail                           =   CompanyBankDetail::findOrFail($id);
        $companybankdetail->bank_id                  =   $request->bank_id;        
        $companybankdetail->account_number           =   $request->account_number;
        $companybankdetail->branch_code              =   $request->branch_code;
        $companybankdetail->account_holder_name      =   $request->account_holder_name;
        if($companybankdetail->save()){
            return new CompanyBankDetailResource($companybankdetail);
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
        $companybankdetail = CompanyBankDetail::findOrFail($id);
        if($companybankdetail->delete()){
            return new CompanyBankDetailResource($companybankdetail);   
        }
    }
}
