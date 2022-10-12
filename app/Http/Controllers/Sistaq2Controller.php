<?php

namespace App\Http\Controllers;
use App\DataSantri;
use Illuminate\Http\Request;

class Sistaq2Controller extends Controller
{
    public function index2()
    {
        $santri = DataSantri::where('program', 'tahfidz 3')->get();
        return view('sistaq.santri.tahfidz3.SantriTahfidz3', [
            'santri'=>$santri
        ]);
    }

    // presensi

    public function presensi3()
    {
        $santri = DataSantri::where('program','tahfidz 3')->get();
        return view('sistaq.santri.tahfidz3.PresensiTahfidz3', [
            'santri'=>$santri
        ]);
    }

    // delete santri

    public function deletesantri3($id)
    {
        DataSantri::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('tahfidz3');
    }

    // edit
    public function edit3($id)
    {
        $output = 'Edit Data Mahasiswa';
        $editdata = DataSantri::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.santri.tahfidz3.EditSantri3', array(
            'content' => $output,
            'editdata' => $editdata
        ));
    }
    public function editdata3(Request $request)
    {
        DataSantri::where('id', $request->input('id'))->update([
            'nama_santri' => $request->input('nama_santri'),
            'nisn' => $request->input('nisn'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'nama_ortu' => $request->input('nama_ortu'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'program' => $request->input('program'),
            'no_hp' => $request->input('no_hp'),
            'foto' => $request->input('foto'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),

          ]);
        //   dd($request->all());
        //   echo $request->all();
          return redirect()->route('tahfidz3');
        // echo 'data berhasil di edit';
    }

    public function jumlah()
    {
        $count = DataSantri::count();
        return View ('dashboard')->with('count', $count);
    }

    // user (penyimak tahfidz)

    public function absensi3()
    {
    $santri = DataSantri::where('program','tahfidz 3')->get();
    return view('sistaq.santri.tahfidz3.AbsensiTahfidz3', [
        'santri'=>$santri
    ]);
    }

     // print
     public function printkode3($id)
     {
         $santri = DataSantri::where('id',$id)->first();
         return view('sistaq.santri.tahfidz3.print', array(
             'santri'=>$santri
         ));
     }
}
