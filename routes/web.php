<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logins', function () {
    return view('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('cekstatus');
Route::get('/dashboard', 'utamaController@index');
Route::get('/welcome', 'homebeforeloginController@index');
Route::get('/shop', 'shopController@index')->name('shop');
Route::get('/about', 'aboutController@index');

Route::get('/checkout', 'checkoutController@checkout');
Route::post('konfirmasi-check-out', 'shopping_cartController@konfirmasi')->name('produkDipesan.store');

Route::get('/admin', 'admindashboardController@index')->middleware('role:admin');
Route::get('/barang', 'barangController@index');
Route::post('/barangadd', 'barangController@store')->name('barang.store');
Route::post('barangup', 'barangController@update')->name('barang');
Route::post('barangdel', 'barangController@delete')->name('barang.delete');

//best seller
Route::post('/addbestseller', 'best_sellerController@addbest')->name('barang3.store');
Route::get('/best_seller', 'best_sellerController@index');


// shopping cart
Route::get('/shop_detail/{id}', 'shop_detailController@index');
Route::get('/shopping_cart', 'shopping_cartController@check_out');
Route::get('konfirmasi-check-out', 'shopping_cartController@konfirmasi');
Route::delete('check-out/{id_barang}', 'shopping_cartController@delete');
Route::post('shoppingcart/store/{id}', 'shopping_cartController@store');
Route::delete('shopping_cart/{id}', 'shopping_cartController@delete')->name('shopping_cart.delete');

//contact
Route::get('/contact', 'pesanController@index');
Route::post('/contactadd', 'pesanController@store')->name('pesan.store');

//pesan
Route::get('/pesanadmin', 'pesan_adminController@index');

//pelanggan
Route::get('/pelanggan', 'pelangganController@index');
Route::post('pelanggandel', 'pelangganController@delete')->name('pelanggan.delete');

//search barang
Route::get('/shop/cari', 'shopController@index');
Route::get('/shop/kategori', 'shopController@index2');

//ongkir cek
Route::get('/ongkir', 'CheckOngkirController@index');
Route::post('/ongkir', 'CheckOngkirController@check_ongkir');
Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');

//API Raja Ongkir
Route::get('province','CheckoutController@get_province')->name('province');
Route::get('/kota/{id}','CheckoutController@get_city');
Route::get('/origin={city_origin}&destination={city_destination}&weight={weight}&courier={courier}','CheckoutController@get_ongkir');

//Upload bukti transfer
Route::get('history', 'historyController@index');
Route::get('history/admin/{id}', 'historyadminController@detail');
Route::get('user/history/{id}', 'historyController@detail');

Route::get('/upload', 'uploadController@index');
Route::post('/upload', 'uploadController@store')->name('upload.store');

//Pesanan_admin
Route::get('/pesanan', 'pesanan_adminController@index');
Route::post('deldp5', 'pesanan_adminController@delete')->name('view.delete');
Route::post('updatess','pesanan_adminController@update')->name('historyadmin.update');
Route::get('pesanan/admin/{id}', 'pesanan_adminController@detail');

//Upload_Admin
Route::get('/viewupload', 'view_uploadController@index');
Route::post('deldp4', 'view_uploadController@delete')->name('view.delete');

//PDF
Route::get('/getPrint','pdfController@getPDF');
Route::get('/{id}/printPesananPdf','pdfController@viewPdf');
Route::get('/user/history/{id}/printPdf','pdfController@pdfUser');