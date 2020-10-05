<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SPResource;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class SPController extends Controller
{
//     public function __construct()
//    {
//     $this->middleware('auth:api')->except(['index', 'show']);
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_providers = ServiceProvider::active()->latest()->get();
        
        return SPResource::collection($service_providers);
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
            'user_id'           => ['nullable','integer'],
            'name'              => ['required', 'string', 'max:255'],
            'ahfoz_number'      => ['required', 'string', 'max:255'],
            'contact_person'    => ['required', 'string', 'max:255'],
            'phone'             => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'cellphone'         => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'address'           => ['required', 'string', 'max:255'],
            'email'             => ['required', 'email', 'max:255'],
        ]);

        $service_provider                   =   new ServiceProvider;
        $service_provider->user_id          =   $request->user_id;
        $service_provider->name             =   $request->name;
        $service_provider->ahfoz_number     =   $request->ahfoz_number;
        $service_provider->contact_person   =   $request->contact_person;
        $service_provider->phone            =   $request->phone;
        $service_provider->cellphone        =   $request->cellphone;
        $service_provider->address          =   $request->address;
        $service_provider->email            =   $request->email;
        if($service_provider->save()){
            return new SPResource($service_provider);
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
        $service_provider = ServiceProvider::find($id);             
        return new SPResource($service_provider);
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
            'user_id'           => ['nullable','integer'],
            'name'              => ['required', 'string', 'max:255'],
            'ahfoz_number'      => ['required', 'string', 'max:255'],
            'contact_person'    => ['required', 'string', 'max:255'],
            'phone'             => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'cellphone'         => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'address'           => ['required', 'string', 'max:255'],
            'email'             => ['required', 'email', 'max:255'],
        ]);

        $service_provider                   =   ServiceProvider::findOrFail($id);
        $service_provider->user_id          =   $request->user_id;
        $service_provider->name             =   $request->name;
        $service_provider->ahfoz_number     =   $request->ahfoz_number;
        $service_provider->contact_person   =   $request->contact_person;
        $service_provider->phone            =   $request->phone;
        $service_provider->cellphone        =   $request->cellphone;
        $service_provider->address          =   $request->address;
        $service_provider->email            =   $request->email;
        if($service_provider->save()){
            return new SPResource($service_provider);
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
        $service_provider = ServiceProvider::findOrFail($id);
        if($service_provider->delete()){
            return new SPResource($service_provider);   
        }
    }
}
