<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::active()->latest()->get();
        
        return EmployeeResource::collection($employee);
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
            'firstname' => ['required', 'string', 'max:255'],
            'surname'   => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'job_title' => ['required', 'string', 'max:255'],
            'branch' => 'required|integer',           
        ]);

        $employee                   =   new Employee;
        $employee->employee_code    =   strtoupper(substr(Branch::where('id',$request->branch)->value('name'),0,3).rand(100,999));
        $employee->branch_id        =   $request->branch;
        $employee->firstname        =   $request->firstname;
        $employee->surname          =   $request->surname;
        $employee->cellphone        =   $request->cellphone;
        $employee->job_title        =   $request->job_title;
        if($employee->save()){
            return new EmployeeResource($employee);
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
        $employee = Employee::find($id);             
        return new EmployeeResource($employee);
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
            'firstname' => ['required', 'string', 'max:255'],
            'surname'   => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:7', 'max:30'],
            'job_title' => ['required', 'string', 'max:255'],
            'branch'    => 'required|integer',           
        ]);

        $employee             =   Employee::findOrFail($id);
        $employee->branch_id  =   $request->branch;
        $employee->firstname  =   $request->firstname;
        $employee->surname    =   $request->surname;
        $employee->cellphone  =   $request->cellphone;
        $employee->job_title  =   $request->job_title;
        if($employee->save()){
            return new EmployeeResource($employee);
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
        $employee = Employee::findOrFail($id);
        if($employee->delete()){
            return new EmployeeResource($employee);   
        }
    }
}
