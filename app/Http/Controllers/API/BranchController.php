<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BranchResource;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::active()->latest()->get();
        
        return BranchResource::collection($branches);
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
            'name'      =>'required|string|min:2',
            'email'     =>'string|email|nullable',
            'phone'     =>'min:2|nullable',
            'address'   =>'string|nullable'                
        ]);

        $branch             =   new Branch;
        $branch->name       =   $request->name;
        $branch->email      =   $request->email;
        $branch->phone      =   $request->phone;
        $branch->address    =   $request->address;
        if($branch->save()){
            return new BranchResource($branch);
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
        $branch = Branch::find($id);             
        return new BranchResource($branch);
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
            'name'      =>'required|string|min:2',
            'email'     =>'string|email|nullable',
            'phone'     =>'min:2|nullable',
            'address'   =>'string|nullable'                
        ]);

        $branch             =   Branch::findOrFail($id);
        $branch->name       =   $request->name;
        $branch->email      =   $request->email;
        $branch->phone      =   $request->phone;
        $branch->address    =   $request->address;
        if($branch->save()){
            return new BranchResource($branch);
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
        $branch = Branch::findOrFail($id);
        if($branch->delete()){
            return new BranchResource($branch);   
        }
    }
}
