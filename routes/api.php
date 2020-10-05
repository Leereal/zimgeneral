<?php

use App\Http\Controllers\API\BankController;
use App\Http\Controllers\API\BranchController;
use App\Http\Controllers\API\ClientBankDetailController;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\CompanyBankDetailController;
use App\Http\Controllers\API\CurrencyController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\GroupController;
use App\Http\Controllers\API\LimitController;
use App\Http\Controllers\API\LimitPlanController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\PaymentMethodController;
use App\Http\Controllers\API\PlanController;
use App\Http\Controllers\API\PremiumController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\SPBankDetailController;
use App\Http\Controllers\API\SPController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResources([
    'users'                     => UserController::class,   
    'roles'                     => RoleController::class,
    'branches'                  => BranchController::class,
    'employees'                 => EmployeeController::class,
    'service-providers'         => SPController::class,
    'groups'                    => GroupController::class,
    'plans'                     => PlanController::class,   
    'clients'                   => ClientController::class, 
    'banks'                     => BankController::class,
    'currencies'                => CurrencyController::class,
    'client-bank-details'       => ClientBankDetailController::class,
    'sp-bank-details'           => SPBankDetailController::class,
    'company-bank-details'      => CompanyBankDetailController::class,
    'payments'                  => PaymentController::class,
    'payment-methods'           => PaymentMethodController::class, 
    'limits'                    => LimitController::class,
    'limitplans'                => LimitPlanController::class,
    'premiums'                  => PremiumController::class,         
]);
