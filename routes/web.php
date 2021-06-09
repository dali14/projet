
<?php
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


Route::get('/','HomeController@welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function (){

    return view('admin.dashbord');
})->middleware('auth','admin')->name('admin.dashbord');



Route::resource('clients', 'Admin\clientController')->middleware(['auth','admin']);
Route::resource('commandes', 'Admin\commandeController')->middleware(['auth','admin']);
Route::resource('detailcommande' , 'admin\detailcommandeController')->middleware(['auth','admin']);
Route::get('/panier/add','Admin\cartController@add')->name('cart_add');
Route::get('/panier','Admin\cartController@index')->name('cart_index');
Route::get('/produit/{product_id}','HomeController@product');

Route::resource('clients', 'Admin\clientController');
Route::resource('commandes', 'Admin\commandeController');
Route::resource('detailcommande' , 'admin\detailcommandeController');
Route::resource('produits' , 'admin\ProduitController');


/*Route::get('/clients', function (){

    return view('');
})->middleware('auth','admin');*/



