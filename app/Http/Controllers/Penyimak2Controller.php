<?php

namespace App\Http\Controllers;
use App\DataPenyimak;

use Illuminate\Http\Request;

class Penyimak2Controller extends Controller
{
    public function penyimak2()
    {
        $ustadzs = DataPenyimak::where('program','tahfidz 2')->get();
        return view('sistaq.penyimak.penyimak2.Penyimak2', [
            'ustadzs'=>$ustadzs
        ]);
    }

    // delete penyimak

    public function deletepenyimak2($id)
    {
        DataPenyimak::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('penyimak2');
    }

    // edit
    public function edit2($id)
    {
        $editdata = DataPenyimak::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.penyimak.penyimak2.EditPenyimak2', array(
            'editdata' => $editdata
        ));
    }
    public function editpenyimak2(Request $request)
    {
        DataPenyimak::where('id', $request->input('id'))->update([
            'nama_penyimak' => $request->input('nama_penyimak'),
            'nip' => $request->input('nip'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'program' => $request->input('program'),
            'no_hp' => $request->input('no_hp'),
            'foto' => $request->input('foto'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),

          ]);
          return redirect()->route('penyimak2');
        // echo 'data berhasil di edit';
    }

}
