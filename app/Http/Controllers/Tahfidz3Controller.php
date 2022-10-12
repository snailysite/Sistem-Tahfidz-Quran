<?php

namespace App\Http\Controllers;

use App\DataSantri;
use Illuminate\Http\Request;

class Tahfidz3Controller extends Controller
{
    public function tahfidz3()
    {
        $santri = DataSantri::where('program','tahfidz 3')->get();
        return view('sistaq.santri.tahfidz3.setoran', [
            'santri' => $santri
        ]);
    }

    public function setorantahfidz3()
    {
        $santri = DataSantri::where('program','tahfidz 3')->get();
        return view('sistaq.santri.tahfidz3.setorantahfidz3',[
            'santri' => $santri
        ]);
    }

}
