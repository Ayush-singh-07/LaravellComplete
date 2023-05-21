<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Routes in Laravel

Route::get("/getuserpage", [UserController::class, "returnUserPage"]);

// Required Parameters:
Route::get('users/{id}',[UserController::class, "returnID"]);

// optional Parameters:
Route::get("user/{id?}", [UserController::class, "returnID"]);

// Regular Expression Constraints:
Route::get("username/{name}", [UserController::class, "handleRegexRoute"])->where('name', '[A-Za-z]+');

// Multiple Route Parameters:
Route::get("dog/{name}/{month}/{year}", [UserController::class, "multipleRoutes"]);


// Named Route Parameters:
Route::get("nameparam/{id}" , [UserController::class, "handleNamedParam"])->name('nameparam.profile');;







//  create blade file using views and control statements.   2.1
Route::get("weekday", [UserController::class, "sendDataToBlade"] );

//Write a Code for validating input data in controller. 2.2
Route::view("userdata", 'userData');
Route::post("userdata", [UserController::class, "validateUserData"]);


// Write a Code for uploading file or image with validation. 2.3
Route::view('imageuploader', 'imageuploader');
Route::post('imageuploader', [UserController::class, "handleupload"]);

// Write a code for functionally of csrf token and flash messages. 2.4
Route::view('flashexample', 'flashpage');
Route::post('flashexample',  [UserController::class, "handleflash"]);









//Create a Code for creating middleware. 3.1
Route::view("unauthorized", "unauthorized");

// Global Middleware
Route::view("homepage", "gethomePage" );   // get http://127.0.0.1:8000/homepage?age=17 -> access denied

//group MiddleWare
Route::group(['middleware'=>['protectedpage']],function(){

    Route::get("getweekday", [UserController::class, "sendDataToBlade"] );
    Route::get("userpage", [UserController::class, "returnUserPage"]);


});

//route Milldleware
Route::get("userspage", [UserController::class, "returnUserPage"])->middleware("protectedpage");






// code of session (Create, access, delete, insert)  3.2
Route::view("login", "login");
Route::view("success", "sessionSuccess" );
Route::post("login",  [UserController::class, "handlelogin"]);
Route::get("logout" ,[UserController::class, "handlelogout"]);



// code for database handing:Insert,Select, Update,Delete. 3.3

Route::view("/registeremployees", "createEmployee");
Route::get('/employeeview' , [UserController::class, 'list']);
Route::get('deleteEmployee/{id}', [UserController::class, 'delete']);
Route::get('updateEmployee/{id}', [UserController::class, 'editListdata']);
Route::post('saveemployee/{id}', [UserController::class, 'saveListdata']);
Route::post("/registeremployees", [UserController::class , 'registerEmployee']);

    






