<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Exports\UsersExport;
use App\Imports\PostsImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class ExcelCSVController extends Controller
{
    public function index(): View
    {
        return view('excel-csv-import');
    }

    public function importExcelCSV(Request $request)
    {
        Excel::import(new PostsImport,$request->file('file'));
        return redirect('excel-csv-file')->with('status', 'holi');

    }

    public function exportExcelCSV($id) 
    {
        return Excel::download(new PostsExport, 'posts.'.$id);
    }
}
