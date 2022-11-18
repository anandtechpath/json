<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\findjsondatacontroller;
use App\Http\Controllers\schemaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/curl', [videoControllerAjax::class, 'phpcurl']);
// Route::get('/get-data', [findjsondatacontroller::class, 'result']);


Route::post('/user-register',[schemaController::class,'user_register']);
Route::post('/login',[schemaController::class,'login']);

Route::group(["middleware" => ["auth:api"]], function(){
    Route::post('/employees-register',[schemaController::class,'employees_register']);
    Route::post('/employees-dpt-insert',[schemaController::class,'employees_dpt_insert']);
    Route::post('/employees-leaves-insert',[schemaController::class,'employees_leaves_insert']);
    Route::post('/employees-performance-insert',[schemaController::class,'employees_performance_insert']);
    Route::post('/employees-project-insert',[schemaController::class,'employees_project_insert']);
    Route::post('/employees-role-insert',[schemaController::class,'employees_role_insert']);
    Route::post('/employees-sallary-insert',[schemaController::class,'employees_sallary_insert']);
    Route::get('/logout',[schemaController::class,'logout']);
    Route::get('/get-employee',[schemaController::class,'get_employee']);
    Route::get('/get-employee-dpt',[schemaController::class,'get_employee_dpt']);
    Route::get('/get-employee-leaves',[schemaController::class,'get_employee_leaves']);
    Route::get('/get-employee-perf',[schemaController::class,'get_employee_perf']);
    Route::get('/get-employee-project',[schemaController::class,'get_employee_project']);
    Route::get('/get-employee-role',[schemaController::class,'get_employee_role']);
    Route::get('/get-employee-sallary',[schemaController::class,'get_employee_sallary']);
});

