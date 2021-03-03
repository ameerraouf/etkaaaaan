<?php

use Illuminate\Http\Request;

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

  Route::post('register','Users@register');
  Route::post('active/{id}','Users@active'); // request name is code return json
  Route::post('active/mobile/code','Users@active_mobile'); // request name is code return json
  Route::post('login','Users@login');
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 
Route::group(['middleware'=>'auth:api'],function(){
  
  //Route::post('login','')
	Route::get('univeristys/lists','Admin\Universityes@api_univeristy_lists');
	Route::get('department/lists','Admin\Universityes@api_department_lists');
	Route::get('levels/lists','Admin\Universityes@api_levels_lists');
	Route::get('materials','Admin\Materials@api_material_list');
	Route::get('material/{id}','Admin\Materials@api_material');

});