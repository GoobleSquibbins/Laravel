<?php

use App\Http\Controllers\kontroller;
use App\Http\Controllers\usurperController;
use App\Http\Controllers\ligmaController;
use App\Http\Controllers\cumtroller;
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

route::get('parallax', [usurperController::class, 'parallax']);

Route::get('/', function () {
    return view('/coba_ujikom/login');
});
//ok
    Route::get('/hhh', [ligmaController::class, 'aaa']);

    Route::get('/create', [ligmaController::class, 'd_save']);
    Route::post('/save_input', [ligmaController::class, 'save']);

    route::get('/update/{id}', [ligmaController::class, 'd_update']);
    route::post('save_update', [ligmaController::class, 'update']);

    route::get('/delete/{id}', [ligmaController::class, 'delete']);
//ok

//register
    // Route::get('d_register', [ligmaController::class, 'd_register']);
    // Route::post('register', [ligmaController::class, 'register']);
//register

//login
    // route::get('login', [ligmaController::class, 'd_login'])->name('login');
//login

//aa
    route::get('kum', [ligmaController::class, 'kum']);
    route::get('about/{aaa}', function($aaa){
        if($aaa === "kkk"){
            abort(404);
        }
        echo $aaa.'<br>';
        $request = request('kum');
        echo $request;
        return view('coba.about');
    });

    route::get('/aaa', [cumtroller::class, 'shidded']);

    route::get('/create_l', [cumtroller::class, 'd_create']);
    route::post('/create_l', [cumtroller::class, 'create'])->name('create');

    route::get('/delete_l/{id_barang}', [cumtroller::class, 'delete']);
    
    route::get('/update_l/{id_barang}', [cumtroller::class, 'd_update']);
    route::post('/update_l', [cumtroller::class, 'update'])->name('update');
//aa

//ujicobakomtol
    route::get('main', [kontroller::class, 'main'])->name('main')->middleware('auth');

    route::get('llogin', [kontroller::class, 'd_login'])->name('d_login');
    route::post('llogin', [kontroller::class, 'login'])->name('login');

    route::get('register', [kontroller::class, 'd_register'])->name('d_register')->middleware('auth', 'cekRole:Admin');
    route::post('register', [kontroller::class, 'register'])->name('register')->middleware('auth', 'cekRole:Admin');

    //paket
        route::get('paket', [kontroller::class, 'paket'])->name('paket')->middleware('auth', 'cekRole:Admin');
        route::get('add_paket', [kontroller::class, 'd_add_paket'])->name('d_add_paket')->middleware('auth', 'cekRole:Admin');
        route::post('add_paket', [kontroller::class, 'add_paket'])->name('add_paket')->middleware('auth', 'cekRole:Admin');

        route::get('edit_paket/{id_paket}', [kontroller::class, 'd_edit_paket'])->name('d_edit_paket')->middleware('auth', 'cekRole:Admin');
        route::post('edit_paket', [kontroller::class, 'edit_paket'])->name('edit_paket')->middleware('auth', 'cekRole:Admin');

        route::get('/hapus_paket/{id_paket}', [kontroller::class, 'hapus_paket'])->name('hapus_paket')->middleware('auth', 'cekRole:Admin');

        route::get('jenis_paket', [kontroller::class, 'jenis_paket'])->name('jenis_paket')->middleware('auth', 'cekRole:Admin');
        
        route::get('add_jenis_paket', [kontroller::class, 'd_add_jenis_paket'])->name('d_add_jenis_paket')->middleware('auth', 'cekRole:Admin');
        route::post('add_jenis_paket', [kontroller::class, 'add_jenis_paket'])->name('add_jenis_paket')->middleware('auth', 'cekRole:Admin');

        route::get('edit_jenis_paket/{id_jenis_paket}', [kontroller::class, 'd_edit_jenis_paket'])->name('d_edit_jenis_paket')->middleware('auth', 'cekRole:Admin');
        route::post('edit_jenis_paket', [kontroller::class, 'edit_jenis_paket'])->name('edit_jenis_paket')->middleware('auth', 'cekRole:Admin');

        route::get('hapus_jenis_paket/{id_jenis_paket}', [kontroller::class, 'hapus_jenis_paket'])->name('hapus_jenis_paket')->middleware('auth', 'cekRole:Admin');
    //user
        route::get('user', [kontroller::class, 'user'])->name('user')->middleware('auth', 'cekRole:Admin');

        route::get('add_user', [kontroller::class, 'd_add_user'])->name('d_add_user')->middleware('auth', 'cekRole:Admin');

        route::get('edit_user/{user_id}', [kontroller::class, 'd_edit_user'])->name('d_edit_user')->middleware('auth', 'cekRole:Admin');
        route::post('edit_user', [kontroller::class, 'edit_user'])->name('edit_user')->middleware('auth', 'cekRole:Admin');

        route::get('hapus_user/{user_id}', [kontroller::class, 'delete_user'])->name('delete_user')->middleware('auth', 'cekRole:Admin');

    //member
        // route::get('member', [kontroller::class, 'member'])->name('member');

        // route::get('add_member', [kontroller::class, 'd_add_member'])->name('d_add_member');
        // route::post('add_member', [kontroller::class, 'add_member'])->name('add_member');

        // route::get('edit_member/{id_member}', [kontroller::class, 'd_edit_member'])->name('d_edit_member');
        // route::post('edit_member', [kontroller::class, 'edit_member'])->name('edit_member');

        // route::get('hapus_member/{id_member}', [kontroller::class, 'delete_member'])->name('delete_member');
    //transaksi
        route::get('transaksi', [kontroller::class, 'transaksi'])->name('transaksi')->middleware('auth');

        route::get('add_transaksi', [kontroller::class, 'd_add_transaksi'])->name('d_add_transaksi')->middleware('auth');
        route::post('add_transaksi', [kontroller::class, 'add_transaksi'])->name('add_transaksi')->middleware('auth');

        route::get('edit_transaksi/{id_transaksi}', [kontroller::class, 'd_edit_transaksi'])->name('d_edit_transaksi')->middleware('auth');
        route::post('edit_transaksi', [kontroller::class, 'edit_transaksi'])->name('edit_transaksi')->middleware('auth');
        
        route::get('delete_transaksi/{id_transaksi}', [kontroller::class, 'delete_transaksi'])->name('delete_transaksi')->middleware('auth');

        route::get('old_transaksi', [kontroller::class, 'old_transaksi'])->name('old_transaksi')->middleware('auth');

        route::get('bayar/{id_transaski}', [kontroller::class, 'd_bayar'])->name('d_bayar')->middleware('auth');
        route::post('bayar', [kontroller::class, 'bayar'])->name('bayar')->middleware('auth');

        route::get('clear_all', [kontroller::class, 'clear_all'])->name('clear_all')->middleware('auth');

    //struk
        route::get('struk/{id_transaksi}', [kontroller::class, 'struk'])->name('struk')->middleware('auth');
    //laporan 
        route::get('laporan', [kontroller::class, 'laporan'])->name('laporan')->middleware('auth');
//ujicobakomtol

Route::get('logout', [kontroller::class, 'logout'])->name('logout');
route::post('cari', [kontroller::class, 'cari'])->name('cari');