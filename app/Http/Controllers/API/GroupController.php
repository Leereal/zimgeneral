<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::active()->latest()->get();
        
        return GroupResource::collection($group);
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
            'name'              => ['required', 'string', 'max:255'],
            'contact_person'    => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255'],
            'phone'             => ['required', 'string', 'max:30'],                    
        ]);

        $group                      =   new Group;
        $group->name                =   $request->name;
        $group->contact_person      =   $request->contact_person;
        $group->email               =   $request->email;
        $group->phone               =   $request->phone;
        if($group->save()){
            return new GroupResource($group);
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
        $employee = Group::find($id);             
        return new GroupResource($employee);
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
            'name'              => ['required', 'string', 'max:255'],
            'contact_person'    => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255'],
            'phone'             => ['required', 'string', 'max:30'],                    
        ]);

        $group                      =   Group::findOrFail($id);
        $group->name                =   $request->name;
        $group->contact_person      =   $request->contact_person;
        $group->email               =   $request->email;
        $group->phone               =   $request->phone;
        if($group->save()){
            return new GroupResource($group);
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
        $group = Group::findOrFail($id);
        if($group->delete()){
            return new GroupResource($group);   
        }
    }
}
