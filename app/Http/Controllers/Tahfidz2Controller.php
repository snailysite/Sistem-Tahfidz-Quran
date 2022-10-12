<?php

namespace App\Http\Controllers;

use App\DataSantri;
use Illuminate\Http\Request;

class Tahfidz2Controller extends Controller
{
    public function tahfidz2()
    {
        $santri = DataSantri::where('program','tahfidz 2')->get();
        return view('sistaq.santri.tahfidz2.setoran', [
            'santri' => $santri
        ]);
    }

    public function setorantahfidz2()
    {
        $santri = DataSantri::where('program','tahfidz 2')->get();
        return view('sistaq.santri.tahfidz2.setorantahfidz2',[
            'santri' => $santri
        ]);
    }
}
