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

Route::get('/welcome', 'PageController@index')->name('welcome');
Route::get('/tentang', 'PageController@tentang')->name('tentang');

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@store');

Route::get('logout', 'AuthController@logout');

Route::get('/public-menara', 'MenaraController@index')->name('public-menara');
Route::get('/public-fiber', 'FiberController@index')->name('public-fiber');

Route::get('unduh-SOP/{id}/download', 'PostPageController@downloadSOP')->name('SOP.download');

Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware'=>['cek_login:1']], function() {
        Route::get('/admin', 'PageController@useradmin')->name('admin');
/*
|--------------------------------------------------------------------------
| Data Wilayah - Admin
|--------------------------------------------------------------------------
*/
        Route::get('admin/datawilayah/kecamatan', 'KecamatanController@index');
        Route::get('admin/datawilayah/desa', 'DesaController@index');
/*
|--------------------------------------------------------------------------
| Data Akun - Admin
|--------------------------------------------------------------------------
*/
        Route::get('admin/dataakun/user', 'UsersController@index');
        Route::post('admin/dataakun/user', 'UsersController@store');
        Route::get('admin/dataakun/user/{post}/edit', 'UsersController@edit');
        Route::patch('admin/dataakun/user/{post}', 'UsersController@update');
        Route::delete('admin/dataakun/user/{post}', 'UsersController@destroy');
        Route::get('/user/exportexcel', 'UsersController@exportxlsx');
        Route::get('/user/printpdf', 'UsersController@exportPdf');
        Route::get('/user/userpdf', 'UsersController@print');
/*
|--------------------------------------------------------------------------
| Halaman - Admin
|--------------------------------------------------------------------------
*/
        Route::get('/data-halaman', 'PostPageController@index');
        Route::post('/data-halaman', 'PostPageController@store');
        Route::get('admin/datapage/{post}/edit', 'PostPageController@edit');
        Route::patch('/data-halaman/{post}', 'PostPageController@update');
        Route::delete('data-halaman/{post}', 'PostPageController@destroy');
/*
|--------------------------------------------------------------------------
| Role Akun - Admin
|--------------------------------------------------------------------------
*/
        Route::get('admin/dataakun/role', 'PostRoleController@index');
        Route::post('admin/dataakun/role', 'PostRoleController@store');
/*
|--------------------------------------------------------------------------
| Data Pengajuan Menara - Admin
|--------------------------------------------------------------------------
*/
        Route::get('/datapengajuan/menara', 'PostMenaraController@index');
        Route::get('/datapengajuan/{post}verifikasi', 'PostMenaraController@edit');
        Route::patch('verifikasi/menara/{post}', 'PostMenaraController@update');
        Route::get('/datapengajuan/{post}rekomendasi', 'PostMenaraController@editrekom');
        Route::patch('rekomendasi/menara/{post}', 'PostMenaraController@rekom');
        Route::get('unduh-permohonan/{id}/download', 'PostMenaraController@downloadPermohonan')->name('permohonan.download');
        Route::get('unduh-perjanjian/{id}/download', 'PostMenaraController@downloadPerjanjian')->name('perjanjian.download');
        Route::get('unduh-pupr/{id}/download', 'PostMenaraController@downloadPupr')->name('pupr.download');
        Route::get('/unduh/surat-pdf/{id}', 'PostMenaraController@exportPdf');
        Route::get('/unduh/rekom-pdf/{id}', 'PostMenaraController@exportblankPdf');
/*
|--------------------------------------------------------------------------
| Data Pengajuan Fiber - Admin
|--------------------------------------------------------------------------
*/
        Route::get('/datapengajuan/fiber', 'PostFiberController@index');
        Route::get('/datapengajuan/{post}verifikasi', 'PostFiberController@edit');
        Route::patch('verifikasi/pengajuan/fiber/{post}', 'PostFiberController@update');
        Route::get('/datapengajuan/{post}rekomendasi', 'PostFiberController@editrekom');
        Route::patch('rekomendasi/fiber/{post}', 'PostFiberController@rekom');
        Route::get('unduh-rencana/{id}/download', 'PostFiberController@downloadRencana')->name('rencana.download');
        Route::get('unduh-peta/{id}/download', 'PostFiberController@downloadPeta')->name('peta.download');
        Route::get('unduh-permohonan/{id}/download', 'PostFiberController@downloadPermohonan')->name('permohonan.download');
        Route::get('unduh-perijinan/{id}/download', 'PostFiberController@downloadPerijinan')->name('perijinan.download');
        Route::get('unduh-kordinat/{id}/download', 'PostFiberController@downloadKordinat')->name('kordinat.download');
        Route::get('unduh/surat-pdf/{id}', 'PostFiberController@exportPdf');
        Route::get('unduh/surat-rekom/{id}', 'PostFiberController@exportrPdf');
/*
|--------------------------------------------------------------------------
| Data Perusahaan - Admin
|--------------------------------------------------------------------------
*/
        Route::get('/data-perusahaan', 'PostPerusahaanController@index');
        Route::post('/admin/dataperusahaan', 'PostPerusahaanController@store');
        Route::post('/data-perusahaan', 'PostPerusahaanController@save');
        Route::get('/dataperusahaan/{post}/edit', 'PostPerusahaanController@edit');
        Route::patch('/dataperusahaan/{post}', 'PostPerusahaanController@update');
        Route::delete('data-perusahaan/{post}', 'PostPerusahaanController@destroy');
    });
/*
|--------------------------------------------------------------------------
| View - User
|--------------------------------------------------------------------------
*/
    Route::group(['middleware'=>['cek_login:2']], function() {
/*
|--------------------------------------------------------------------------
| View - User Menara
|--------------------------------------------------------------------------
*/
        Route::get('/menara', 'MenaraController@index')->name('menara');
        Route::get('/riwayat-menara', 'MenaraController@riwayatM');
        Route::get('/show/{id}', 'MenaraController@show')->name('show');
        Route::get('/userpdf/{id}', 'MenaraController@exportPdf');
        Route::post('user/menara', 'MenaraController@store');
        Route::get('/user/{post}/ajukan', 'MenaraController@edit');
        Route::patch('/user/{post}', 'MenaraController@ajukan');
        Route::get('/unduh/rekom-pdf/{id}', 'MenaraController@exportPdf');
        Route::get('/unduh/tolak-pdf/{id}', 'MenaraController@exporttolakPdf');
/*
|--------------------------------------------------------------------------
| View - User Fiber
|--------------------------------------------------------------------------
*/
        Route::get('/fiber', 'FiberController@index')->name('fiber');
        Route::get('/fiber/edit/{id}', 'FiberController@ubah');
        Route::patch('user/fiber-simpan/{post}', 'FiberController@simpan');
        Route::get('/riwayat-fiber', 'FiberController@riwayatF');
        Route::get('/fiber/show/{id}', 'FiberController@show')->name('show');
        Route::post('user/fiber', 'FiberController@store');
        Route::get('user/fiber/{post}/ajukan', 'FiberController@edit');
        Route::patch('/user/fiber/{post}', 'FiberController@ajukan');
        Route::get('/unduh/rekom-pdf/{id}', 'FiberController@exportPdf');
        Route::get('/unduh/tolak-pdf/{id}', 'FiberController@exporttolakPdf');
    });
});

Route::get('user/desa/{id}', 'MenaraController@desa');