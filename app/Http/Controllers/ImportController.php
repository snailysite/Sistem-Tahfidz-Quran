<?php

namespace App\Http\Controllers;

use App\DataSantri;
use App\DataSantriExcel;
use App\Imports\SantriImport;
use Illuminate\Contracts\Session\Session;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function SantriImportexcel(Request $request)
    {
        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('DataSantri',$nama_file);

        Excel::import(new DataSantri, public_path('/DataSantri/'.$nama_file));

        return redirect()->route('tahfidz1');
    }

}
