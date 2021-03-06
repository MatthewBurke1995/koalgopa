<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::get('/search',function(Request $request){
 $query = $request->input('query');

 $companies = DB::table('companies')->select('companyid', 'companyTitle')->where('companyTitle','like','%'.$query.'%')->get();
 return response()->json($companies);
});
