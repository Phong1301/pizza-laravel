<?php
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\DB;
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


// Front-end
Route::get('/', [FrontEndController::class, 'home'])->name('home');



// Relationship 1vs1
Route::get('relation', function(){
    $products = App\products::all();

    foreach($products as $product){
        echo $product -> name;
        echo '<br>';
        echo $product -> categories-> id;
        echo '<br>';
    }
});
