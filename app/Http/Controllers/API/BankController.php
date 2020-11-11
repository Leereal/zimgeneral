<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::latest()->get();
        
        return BankResource::collection($banks);
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
            'name'      => 'required|string', 
            'avatar'    => 'required|image:jpeg,png,jpg,gif,svg'               
        ]);

        if($request->avatar){

            $extension = explode('/', mime_content_type($request->avatar))[1];
            $name = $request->name.".".$extension;
            Image::make($request->avatar)->save(public_path('images/bank/').$name);
            $request->merge(['avatar' => $name]);
           
        }
 
        // $bank        =   new Bank;
        // $bank->name  =   $request->name;
        // $bank->avatar  =   $request->avatar;
        // if($bank->save()){
        //     return new BankResource($bank);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = Bank::find($id);             
        return new BankResource($bank);
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
            'name'      => 'required|string', 
            'avatar'    => 'required|string',                 
        ]);

        $bank        =   Bank::findOrFail($id);
        $bank->name  =   $request->name;
        $bank->avatar  =   $request->avatar;
        if($bank->save()){
            return new BankResource($bank);
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
        $bank = Bank::findOrFail($id);
        if($bank->delete()){
            return new BankResource($bank);   
        }
    }
}
