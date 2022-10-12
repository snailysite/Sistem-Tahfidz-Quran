<?php

namespace App\Http\Controllers;
use App\DataSantri;
use App\Imports\SantriImport;
use Illuminate\Http\Request;


class Sistaq1Controller extends Controller
{
    public function index1()
    {
        $santri = DataSantri::where('program','tahfidz 2')->get();
        return view('sistaq.santri.tahfidz2.SantriTahfidz2', [
            'santri'=>$santri
        ]);
    }

    // presensi

    public function presensi2()
    {
        $santri = DataSantri::where('program','tahfidz 2')->get();
        return view('sistaq.santri.tahfidz2.PresensiTahfidz2', [
            'santri'=>$santri
        ]);
    }


    // delete santri

    public function deletesantri2($id)
    {
        DataSantri::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('tahfidz2');
    }

    // edit
    public function edit2($id)
    {
        $output = 'Edit Data Mahasiswa';
        $editdata = DataSantri::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.santri.tahfidz2.EditSantri2', array(
            'content' => $output,
            'editdata' => $editdata
        ));
    }
    public function editdata2(Request $request)
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
          return redirect()->route('tahfidz2');
        // echo 'data berhasil di edit';
    }

    // user (penyimak tahfidz)

    public function absensi2()
    {
    $santri = DataSantri::where('program','tahfidz 2')->get();
    return view('sistaq.santri.tahfidz2.AbsensiTahfidz2', [
        'santri'=>$santri
    ]);
    }



    public function contoh()
    {
        return view('sistaq.contoh');
    }

     // print
     public function printkode2($id)
     {
         $santri = DataSantri::where('id',$id)->first();
         return view('sistaq.santri.tahfidz2.print', array(
             'santri'=>$santri
         ));
     }

}
