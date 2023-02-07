<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {

    $uppercase = $request->input('uppercase');
    $lowercase = $request->input('lowercase');
    $numbers = $request->input('numbers');
    $special = $request->input('special');
    $length = 8;
    $password = generatePassword($length, $uppercase, $lowercase, true, $special);
    return view('index', compact('password', 'length'));
});
Route::post('/password', function (Request $request) {

    $uppercase = $request->input('uppercase');
    $lowercase = $request->input('lowercase');
    $numbers = $request->input('numbers');
    $special = $request->input('special');
    $length = $request->input('length');
    $password = generatePassword($length, $uppercase, $lowercase, $numbers, $special);

    return view('index', compact('password', 'length'));
});
// generate password
function generatePassword($length, $uppercase, $lowercase, $numbers, $special)
{
    $characters = '';
    if ($uppercase) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($lowercase) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($numbers) {
        $characters .= '0123456789';
    }
    if ($special) {
        $characters .= '!@#$%^&*()';
    }
    $charactersLength = strlen($characters);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}
