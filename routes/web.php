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

Route::get('index','dashboard_controller@index');
Route::get('about','dashboard_controller@abouts');
Route::get('tentang','dashboard_controller@tentang');
Route::get('contact','dashboard_controller@contacts');
Route::get('dashboard','dashboard_controller@dashboardinfo');
Route::get('index','dashboard_controller@dashboard');
Route::get('kisah','dashboard_controller@kisahh');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    // Manage Sumber Pemasukan
Route::get('sumber-pemasukan','Sumber_controller@index');
Route::get('sumber-pemasukan/add','Sumber_controller@add');
Route::post('sumber-pemasukan/add','Sumber_controller@store');
Route::get('sumber-pemasukan/{id}','Sumber_controller@edit');
Route::put('sumber-pemasukan/{id}','Sumber_controller@update');
Route::delete('sumber-pemasukan/{id}','Sumber_controller@delete');

// // Manage Pemasukan
Route::get('pemasukan','Pemasukan_controller@index');
Route::get('pemasukan/yajra','Pemasukan_controller@yajra');
Route::get('pemasukan/add','Pemasukan_controller@add');
Route::post('pemasukan/add','Pemasukan_controller@store');
Route::get('pemasukan/{id}','Pemasukan_controller@edit');
Route::put('pemasukan/{id}','Pemasukan_controller@Update');
Route::delete('pemasukan/{id}','Pemasukan_controller@delete');

// //Manage Pengeluaran
Route::get('pengeluaran','Pengeluaran_controller@index');
Route::get('pengeluaran/add','Pengeluaran_controller@add');
Route::post('pengeluaran/add','Pengeluaran_controller@store');
Route::get('pengeluaran/{id}','Pengeluaran_controller@edit');
Route::put('pengeluaran/{id}','Pengeluaran_controller@update');
Route::delete('pengeluaran/{id}','Pengeluaran_controller@delete');

// //Laporan
Route::get('laporan-keuangan','Laporan_controller@index');
Route::get('cari-laporan','Laporan_controller@cari');
Route::get('export-pemasukan/{dari}/{sampai}','Laporan_controller@export_pemasukan');
Route::get('export-pengeluaran/{dari}/{sampai}','Laporan_controller@export_pengeluaran');


});

Route::get('add-user',function(){
    \DB::table('users')->insert([
        'name'=>'admin',
        'email'=>'al-ikhlas@masjid.com',
        'password'=>bcrypt('123'),
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
});




Auth::routes();

Route::get('/home',function(){
    return redirect('/');

});

Route::get('keluar',function(){
    \Auth::logout();
 
    return redirect('index');
});