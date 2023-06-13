<?php

use Illuminate\Support\Facades\Route;

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

// Route::post('/pemeriksaan', function () {
//     return view('pemeriksaan');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2>    Hello $nama  dari $alamat </h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', [ 'id' =>$id ] );
});

//MENGGUNAKAN   UserController  DENGAN  PEMANGGILAN     BERIKUT
use App\Http\Controllers\UserController;

Route::get('/user', 
    [usercontroller::class,  'index' ] );

Route::get('/user/daftar', 
    [usercontroller::class,  'daftar' ] );

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');

// Kode untuk memanggil dari form pemeriksaan
Route::get('/user/pemeriksaan', 
    [UserController::class, 'pemeriksaan']);

 // Kode untuk mengambil inputan dari form dan di pindah ke pasien
Route::post('/user/pasien', 
    [UserController::class, 'pasien'])->name('user/pasien');


use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){

    Route::get('/', 
        [TokoController::class,  'index' ] );

    Route::get('/detail', 
        [TokoController::class,  'detail' ] );

    Route::get('/about', 
        [TokoController::class,  'about' ] );


    // AUTENTIKASI UNTUK LOGIN DAHULU AGAR BISA AKSES toko/admin
    Route::group(['middleware' => ['auth'] ],  function ( ) {


        // ROUTES FOR PRODUCT
        Route::get('/admin', 
            [TokoController::class,  'admin' ] )->name('produk.admin');

        Route::get('create', 
            [TokoController::class,  'create' ] )->name('produk.create');
    
        Route::post('/',
            [TokoController::class,  'store' ] )->name('produk.store');
    
        Route::get('/{product}/edit',
            [TokoController::class,  'edit' ] )->name('produk.edit');

        Route::delete('/{product}',
            [TokoController::class,  'destroy' ] )->name('produk.destroy');

        Route::put('/{product}',
            [TokoController::class,  'update' ] )->name('produk.update');


        //ROUTES FOR CUSTOMER
        Route::get('/customer', 
            [TokoController::class,  'customer' ]) ->name('customer.customer');

        Route::get('new', 
            [TokoController::class,  'new' ] )->name('customer.new');

        Route::post('/member',
            [TokoController::class,  'member' ] )->name('customer.member');

        Route::get('/{customer}/editc',
            [TokoController::class,  'editc' ] )->name('customer.editc');

        Route::delete('/{customer}',
            [TokoController::class,  'destroys' ] )->name('customer.destroys');

        Route::put('/{customer}',
            [TokoController::class,  'updates' ] )->name('customer.updates');

    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
