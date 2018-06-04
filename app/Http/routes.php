<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('connexion', function() {
           return view('connexion/connexion');
    });
    Route::get('inscription', function() {
           return view('inscription/inscription');
    });
    Route::get('home', function() {
           return view('home/home');
    });
    Route::get('home/agenda', function() {
           return view('agenda/agenda');
    });
    Route::get('home/evenement', function() {
           return view('evenement/evenement');
    });
    Route::get('home/qcm',function() {
      return view('qcm/qcm');
    });
    /**
     * Add New Task
     */
    // Route::post('/task', function (Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|max:255',
    //     ]);
    //
    //     if ($validator->fails()) {
    //         return redirect('/')
    //             ->withInput()
    //             ->withErrors($validator);
    //     }
    //
    //     $task = new Task;
    //     $task->name = $request->name;
    //     $task->save();
    //
    //     return redirect('/');
    // });
    //
    // /**
    //  * Delete Task
    //  */
    // Route::delete('/task/{id}', function ($id) {
    //     Task::findOrFail($id)->delete();
    //
    //     return redirect('/');
    // });
});
