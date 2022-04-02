<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
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
        $validatedData = $request->validate([
 
            'file' => 'required',
  
        ]);
        Excel::import(new UsersImport,$request->file('file'));
        return redirect('excel-csv-file')->with('status', 'The file has been excel/csv imported to database');

    }

    public function exportExcelCSV($slug) 
    {
        return Excel::download(new UsersExport, 'users.'.$slug);
    }
}
