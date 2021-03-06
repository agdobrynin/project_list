<?php

use Illuminate\Http\Request;
use App\Project;

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
/*
 | Получение через API списка проектов
 |
 */
Route::get('/project/{id?}', function( $id = null ){
    if( $id ){
        return Project::findOrFail($id);
    }else{
        return Project::all();
    }
});
