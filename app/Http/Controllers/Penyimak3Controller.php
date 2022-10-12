<?php

namespace App\Http\Controllers;
use App\DataPenyimak;

use Illuminate\Http\Request;

class Penyimak3Controller extends Controller
{
    public function penyimak3()
    {
        $ustadzs = DataPenyimak::where('program','tahfidz 3')->get();
        return view('sistaq.penyimak.penyimak3.Penyimak3', [
            'ustadzs'=>$ustadzs
        ]);
    }

    // delete penyimak

    public function deletepenyimak3($id)
    {
        DataPenyimak::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('penyimak3');
    }

    // edit
    public function edit3($id)
    {
        $editdata = DataPenyimak::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.penyimak.penyimak3.EditPenyimak3', array(
            'editdata' => $editdata
        ));
    }
    public function editpenyimak3(Request $request)
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
          return redirect()->route('penyimak3');
        // echo 'data berhasil di edit';
    }

}
