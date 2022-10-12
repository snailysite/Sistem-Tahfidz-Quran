<?php

namespace App\Http\Controllers;

use App\DataSantri;
use Illuminate\Http\Request;

class Tahfidz1Controller extends Controller
{
    public function tahfidz1()
    {
        $santri = DataSantri::where('program','tahfidz 1')->get();
        return view('sistaq.santri.tahfidz1.setoran',[
            'santri' => $santri
        ]);
    }

    public function setorantahfidz1()
    {
        $santri = DataSantri::where('program','tahfidz 1')->get();
        return view('sistaq.santri.tahfidz1.setorantahfidz1',[
            'santri' => $santri
        ]);
    }
}
