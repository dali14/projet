
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


Route::get('/','HomeController@welcome')->name('produit.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function (){

    return view('admin.dashbord');
})->middleware('auth','admin')->name('admin.dashbord');



Route::resource('clients', 'Admin\clientController')->middleware(['auth','admin']);// admin panel client liste
Route::resource('commandes', 'Admin\commandeController')->middleware(['auth','admin']);//admin panel commande liste
Route::resource('detailcommande' , 'admin\detailcommandeController')->middleware(['auth','admin']);//admin panel detailcommande liste
Route::get('/produit/{product_id}','HomeController@product');
Route::post('/panier/ajouter' ,'Admin\cartController@store')->name('cart.store');
Route::resource('produits' , 'admin\ProduitController');

//panier routes
Route::get('/panier','cartController@index')->name('cart.index');//route pour le panier 
Route::get('/panier/ajouter', 'cartController@store')->name('cart.store');//ajouter produit a panier
Route::get('/videpanier', function (){                                      //vide panier 
    Cart::destroy();
});
Route::get('/panier/{rowId}','cartController@destroy')->name('cart.destroy');//supprime un element de panier

//paiment routes

Route::get('/paiement' ,'paimentController@index')->name('paiment.index');
Route::post('/paiement' ,'paimentController@store')->name('paiment.store');
Route::get('/merci', function(){
    return view('paiment.merci');
});




/*Route::get('/clients', function (){

    return view('');
})->middleware('auth','admin');*/



