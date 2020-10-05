<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\LimitResource;
use App\Models\Limit;
use Illuminate\Http\Request;

class LimitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LimitResource::collection(Limit::paginate(25));
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

        $limit            =   new Limit;
        $limit->name      =   $request->name;    

        if ($limit->save()) {
            return new LimitResource($limit);
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
        return new LimitResource(Limit::find($id));
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

        $limit            =   Limit::findOrFail($id);
        $limit->name      =   $request->name;    

        if ($limit->save()) {
            return new LimitResource($limit);
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
            $limit = Limit::findOrFail($id);
            if($limit->delete()){
                return new LimitResource($limit);   
            }
        // }        
        // else{
        //     return response()->json(['error' => 'You can only delete your own books.'], 403); 
        // }
    }
}
