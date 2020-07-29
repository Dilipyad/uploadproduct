<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Product;
use Storage;
class CsvFile extends Controller
{
   function index(){

    $data=Product::latest()->paginate(10);
    return view('csv_file_pagination', compact('data'))->with('i',(request()->input('page',1)-1)*10);

   }


public function csv_export(){
    
    return Excel::download(new CsvExport, 'sample.csv');

}


public function csv_import(){

     Excel::import(new CsvImport, request()->file('file'));
     return back();

}

public function downloadSampleFile(){

    $filepath = public_path('sample.csv');
    return Storage::disk('public')->download('sample.csv', 'uploadsample.csv', ['Content-Type: text/csv"','Content-disposition: attachment;filename=MyVerySpecial.csv']);

}


}
