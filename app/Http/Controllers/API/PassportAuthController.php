<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassportAuthController extends Controller {
    /**
    * Registration Req
    */

    public function register( Request $request ) {
        $this->validate( $request, [
            'employee_code' => 'required|min:4|string|unique:users,username|max:30|exists:employees,employee_code',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ] );

        DB::beginTransaction();
        $employee = Employee::where( 'employee_code', $request->employee_code )->first();
        if ( $employee ) {
            $user = User::create( [
                'username' => $request->employee_code,
                'email' => $request->email,
                'password' => bcrypt( $request->password ),
                'ipaddress'   => request()->ip(),
            ] );
            $employee->update( ['user_id' => $user->id] );          
           
        } else {
            DB::rollBack();
            return response()->json( ['error' => 'Employee does not exist'], 500 );
        }
        DB::commit();
        return $user;
        
    }

    /**
    * Login Method
    */

    public function login( Request $request ) {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if ( auth()->attempt( $data ) ) {            
             $token = auth()->user()->createToken( 'LaravelAuthApp' )->accessToken;
             return response()->json( ['user'=>auth()->user()->employee, 'token' => $token, 'roles'=>auth()->user()->roles], 200 );
          
        } else {
            return response()->json( ['error' => 'Unauthorised'], 401 );
        }
    }
}
