<?php

use App\Models\Post;
use App\Models\Pengajuan;
use Illuminate\Support\Arr;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanController;
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
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Home Page']);
});

Route::get('/pengguna', function () {
    return view('pengguna', ['title' => 'Pengguna']);
});

Route::get('/pengajuans', function () {
    return view('pengajuans', ['title' => 'Pengajuan Buku', 'pengajuans' => Pengajuan::all()]);
});
// Route::get('/pengajuan', function () {
//     return view('pengajuan', ['title' => 'Tambah Data Pengajuan Buku', 'pengajuan' => Pengajuan::all()]);
// });

Route::get('/pengadaan', function () {
    return view('pengadaan',['title' => 'Data Pengadaan Buku', 'pengadaan' => Pengajuan::all()]);
});
Route::get('/posts', function () {
    return view('posts',['title' => 'blog', 'posts' => Post::all()]);
});

Route::get('/posts/{id}', function($id) {
    
    $post = Post::find($id);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
// Route::get('/pengajuan', function () {
//     return view('pengajuan', ['title' => 'Tambah Data Pengajuan Buku', 'pengajuans' => Pengajuan::all()])->name('pengajuan.create');
// });
Route::get('/login', [LoginController::class, 'index'] );

Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');