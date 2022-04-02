<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
})->name('welcome');

Route::resource('posts', PostController::class);


use App\Http\Controllers\ExcelCSVController;
 
Route::get('excel-csv-file', [ExcelCSVController::class, 'index'])->name('exports');
Route::post('import-excel-csv-file', [ExcelCSVController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{id}', [ExcelCSVController::class, 'exportExcelCSV']);

Route::post('/import', [PostController::class, 'import'])->name('posts.import');
Route::get('/export', [PostController::class, 'export'])->name('posts.export');


