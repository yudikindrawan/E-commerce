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

Route::get('/', function () {
    return view('welcome');
});

/*route login*/
route::get('/login', 'logincontroller@getlogin')->name('login');
route::post('/postlogin', 'logincontroller@postlogin')->name('postlogin');

/*route logout*/
route::get('/modal_logout', 'logoutcontroller@getlogout')->name('modal_logout');
route::post('/logout', 'logoutcontroller@logout')->name('logout');

/*route edit password*/
route::get('/modal_ubah', 'Editpasscontroller@index')->name('modal_ubah');
route::post('changePassword', 'Editpasscontroller@changePassword')->name('changePassword');

/*route Index Admin*/
route::get('admin/', 'IndexAdminController@index')->name('index');
Route::get('admin/chart','IndexAdminController@chart')->name('chart');

route::get('bagpenjualan/', 'indexbagpenjualanController@index')->name('indexpenjualan');
route::get('staffgudang/', 'indexstaffController@index')->name('index_staff');
route::get('manajer/', 'indexmanajerController@index')->name('indexmanajer');

/*route data user*/
Route::get('admin/datauser/user', 'UserController@index')->name('user');
Route::get('admin/datauser/modal_create', 'UserController@create')->name('modal_create');
Route::get('admin/datauser/modal_edit', 'UserController@edit')->name('modal_edit');
Route::post('admin/datauser/create', 'UserController@store')->name('store_user');
Route::post('admin/datauser/update/{id}', 'UserController@update')->name('update');

/*route data customer*/
Route::get('admin/customer', 'customerController@index')->name('customer');
Route::get('admin/customer/modal_create_customer', 'customerController@create')->name('modal_create_customer');
Route::get('admin/customer/modal_edit_customer', 'customerController@edit')->name('modal_edit_customer');
Route::post('admin/customer/create', 'customerController@store')->name('store_customer');
Route::post('admin/customer/update/{id}', 'customerController@update')->name('update_customer');

/*route data supplier*/
Route::get('admin/supplier', 'supplierController@index')->name('supplier');
Route::get('admin/supplier/modal_create_supplier', 'supplierController@create')->name('modal_create_supplier');
Route::get('admin/supplier/modal_edit_supplier', 'supplierController@edit')->name('modal_edit_supplier');
Route::post('admin/supplier/create', 'supplierController@store')->name('store_supplier');
Route::post('admin/supplier/update/{id}', 'supplierController@update')->name('update_supplier');

/*route data produk*/
Route::get('admin/produk', 'produkController@index')->name('produk');
Route::get('admin/produk/modal_create_produk', 'produkController@create')->name('modal_create_produk');
Route::get('admin/produk/modal_edit_produk', 'produkController@edit')->name('modal_edit_produk');
Route::post('admin/produk/create', 'produkController@store')->name('store_produk');
Route::post('admin/produk/update/{id}', 'produkController@update')->name('update_produk');

/*route data penjualan*/
Route::get('admin/penjualan', 'penjualanController@index')->name('penjualan');
Route::get('admin/penjualan/modal_create_penjualan', 'penjualanController@create')->name('modal_create_penjualan');
Route::get('admin/penjualan/modal_edit_penjualan', 'penjualanController@edit')->name('modal_edit_penjualan');
Route::get('admin/penjualan/cari', 'penjualanController@cari')->name('cari');
Route::get('admin/penjualan/modal_retur_penjualan', 'penjualanController@retur')->name('modal_retur_penjualan');
Route::get('admin/penjualan/invoice_penjualan', 'penjualanController@invoice')->name('invoice_penjualan');
Route::post('admin/penjualan/create', 'penjualanController@store')->name('store_penjualan');
Route::post('admin/penjualan/update/{id}', 'penjualanController@update')->name('update_penjualan');
Route::post('admin/penjualan/retur/{id}', 'penjualanController@returupdate')->name('update_returpenjualan');


Route::get('admin/penjualan/invoice_penjualan', 'penjualanController@invoice')->name('invoice_penjualan');

/*route data pembelian*/
Route::get('admin/pembelian', 'pembelianController@index')->name('pembelian');
Route::get('admin/pembelian/modal_create_pembelian', 'pembelianController@create')->name('modal_create_pembelian');
Route::get('admin/pembelian/modal_edit_pembelian', 'pembelianController@edit')->name('modal_edit_pembelian');
Route::post('admin/pembelian/create', 'pembelianController@store')->name('store_pembelian');
Route::post('admin/pembelian/update/{id}', 'pembelianController@update')->name('update_pembelian');


/*route data retur*/
Route::get('admin/retur', 'returController@index')->name('retur');
Route::get('admin/retur/modal_create_retur', 'returController@create')->name('modal_create_retur');
Route::get('admin/retur/modal_edit_retur', 'returController@edit')->name('modal_edit_retur');
Route::post('admin/retur/create', 'returController@store')->name('store_retur');
Route::post('admin/retur/update/{id}', 'returController@update')->name('update_retur');

/*route data pemesanan*/
Route::get('admin/pemesanan', 'pemesananController@index')->name('pemesanan');
Route::post('admin/add_pemesanan','pemesananController@store')->name('addPemesanan');
Route::get('admin/detail/pemesanan','pemesananController@tampil')->name('tampil_pemesanan');
Route::get('admin/pemesanan/setuju', 'pemesananController@setuju')->name('modal_setuju_pemesanan');
Route::post('admin/pemesanan/proses/{id}', 'pemesananController@update')->name('proses_pemesanan');
Route::get('admin/pemesanan/index_pemesanan', 'pemesananController@indextampil')->name('indextampil');




/*route data kategori*/
Route::get('admin/kategori', 'kategoriController@index')->name('kategori');
Route::get('admin/kategori/modal_create_kategori', 'kategoriController@create')->name('modal_create_kategori');
Route::get('admin/kategori/modal_edit_kategori', 'kategoriController@edit')->name('modal_edit_kategori');
Route::post('admin/kategori/create', 'kategoriController@store')->name('store_kategori');
Route::post('admin/kategori/update/{id}', 'kategoriController@update')->name('update_kategori');

/*route data size*/
Route::get('admin/size', 'sizeController@index')->name('size');
Route::get('admin/size/modal_create_size', 'sizeController@create')->name('modal_create_size');
Route::get('admin/size/modal_edit_size', 'sizeController@edit')->name('modal_edit_size');
Route::post('admin/size/create', 'sizeController@store')->name('store_size');
Route::post('admin/size/update/{id}', 'sizeController@update')->name('update_size');

/*route data size*/
Route::get('admin/size', 'sizeController@index')->name('size');
Route::get('admin/size/modal_create_size', 'sizeController@create')->name('modal_create_size');
Route::get('admin/size/modal_edit_size', 'sizeController@edit')->name('modal_edit_size');
Route::post('admin/size/create', 'sizeController@store')->name('store_size');
Route::post('admin/size/update/{id}', 'sizeController@update')->name('update_size');

/*route laporan*/
route::get('admin/laporan/', 'laporanController@index')->name('laporan_produk');
route::post('admin/laporan/cetak', 'laporanController@cetak')->name('laporan_cetak');
route::get('admin/laporan/print/{awal}/{akhir}', 'laporanController@tampildata')->name('laporan_tampil');

/*route laporan penjualn*/
route::get('admin/laporanpenjualan/', 'laporanpenjualanController@index')->name('laporan_penjualan');
route::post('admin/penjualan/cetak', 'laporanpenjualanController@cetak')->name('lap_cetak');
route::get('admin/laporanpenjualan/print/{awal}/{akhir}', 'laporanpenjualanController@tampildata')->name('laporan_tampil');