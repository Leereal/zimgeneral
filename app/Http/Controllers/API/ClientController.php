<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::active()->latest()->get();
        
        return ClientResource::collection($clients);
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
            'date_joined'           => ['required','date', ],
            'medical_aid_number'    => ['required', 'string', 'unique:clients,medical_aid_number'],
            'id_number'             => ['required', 'min:5', 'unique:clients,id_number'],
            'title'                 => ['required', 'string'],
            'firstname'             => ['required', 'string', 'max:255'],
            'surname'               => ['required', 'string', 'max:255'],
            'date_of_birth'         => ['required', 'date', 'max:30'],
            'address'               => ['nullable', 'string'],
            'gender'                => ['required', 'string'],
            'business_telephone'    => ['nullable', 'string', 'max:30'],
            'home_telephone'        => ['nullable', 'string', 'max:30'],
            'cellphone'             => ['nullable', 'string', 'max:30'],
            'email'                 => ['nullable', 'date', 'max:255'],
            'type'                  => ['required', 'string'],
            'avatar'                => ['nullable', 'string', 'max:255'],
            'membership_status'     => ['nullable','integer'],
            'card_status'           => ['nullable','integer'],
            'referrer_id'           => ['nullable','integer'],
            'principal_id'          => ['nullable','integer'],
            'branch_id'             => ['required', 'integer'],
            'user_id'               => ['nullable','integer'],
            'plan_id'               => ['required','integer'],
            'created_by'            => ['required', 'integer'],
            'group_id'              => ['nullable','integer'],                
        ]);

        $client                     =   new Client;
        $client->date_joined        =   $request->date_joined;
        $client->medical_aid_number =   $request->medical_aid_number;
        $client->id_number          =   $request->id_number;
        $client->title              =   $request->title;
        $client->firstname          =   $request->firstname;
        $client->surname            =   $request->surname;
        $client->date_of_birth      =   $request->date_of_birth;
        $client->address            =   $request->address;
        $client->gender             =   $request->gender;
        $client->business_telephone =   $request->business_telephone;
        $client->home_telephone     =   $request->home_telephone;
        $client->cellphone          =   $request->cellphone;
        $client->email              =   $request->email;
        $client->type               =   $request->type;
        $client->avatar             =   $request->avatar;
        $client->membership_status  =   $request->membership_status;
        $client->card_status        =   $request->card_status;
        $client->referrer_id        =   $request->referrer_id;
        $client->principal_id        =   $request->principal_id;
        $client->branch_id          =   $request->branch_id;
        $client->user_id            =   $request->user_id;
        $client->plan_id            =   $request->plan_id;
        $client->created_by         =   $request->created_by;
        $client->group_id           =   $request->group_id;
        if($client->save()){
            return new ClientResource($client);
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
        $client = Client::find($id);             
        return new ClientResource($client);
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
            'date_joined'           => ['required','date', ],
            'medical_aid_number'    => ['required', 'string', 'unique:clients,medical_aid_number'],
            'id_number'             => ['required', 'min:5', 'unique:clients,id_number'],
            'title'                 => ['required', 'string'],
            'firstname'             => ['required', 'string', 'max:255'],
            'surname'               => ['required', 'string', 'max:255'],
            'date_of_birth'         => ['required', 'date', 'max:30'],
            'address'               => ['nullable', 'string'],
            'gender'                => ['required', 'string'],
            'business_telephone'    => ['nullable', 'string', 'max:30'],
            'home_telephone'        => ['nullable', 'string', 'max:30'],
            'cellphone'             => ['nullable', 'string', 'max:30'],
            'email'                 => ['nullable', 'date', 'max:255'],
            'type'                  => ['required', 'string'],
            'avatar'                => ['nullable', 'string', 'max:255'],
            'membership_status'     => ['nullable','integer'],
            'card_status'           => ['nullable','integer'],
            'principal_id'          => ['nullable','integer'],
            'referrer_id'           => ['nullable','integer'],
            'branch_id'             => ['required', 'integer'],
            'user_id'               => ['nullable','integer'],
            'plan_id'               => ['required','integer'],
            'created_by'            => ['required', 'integer'],
            'group_id'              => ['nullable','integer'],                
        ]);

        $client                     =   Client::findOrFail($id);
        $client->date_joined        =   $request->date_joined;
        $client->medical_aid_number =   $request->medical_aid_number;
        $client->id_number          =   $request->id_number;
        $client->title              =   $request->title;
        $client->firstname          =   $request->firstname;
        $client->surname            =   $request->surname;
        $client->date_of_birth      =   $request->date_of_birth;
        $client->address            =   $request->address;
        $client->gender             =   $request->gender;
        $client->business_telephone =   $request->business_telephone;
        $client->home_telephone     =   $request->home_telephone;
        $client->cellphone          =   $request->cellphone;
        $client->email              =   $request->email;
        $client->type               =   $request->type;
        $client->avatar             =   $request->avatar;
        $client->membership_status  =   $request->membership_status;
        $client->card_status        =   $request->card_status;
        $client->referrer_id        =   $request->referrer_id;
        $client->principal_id       =   $request->principal_id;
        $client->branch_id          =   $request->branch_id;
        $client->user_id            =   $request->user_id;
        $client->plan_id            =   $request->plan_id;
        $client->created_by         =   $request->created_by;
        $client->group_id           =   $request->group_id;
        if($client->save()){
            return new ClientResource($client);
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
        $client = Client::findOrFail($id);
        if($client->delete()){
            return new ClientResource($client);   
        }
    }
}
