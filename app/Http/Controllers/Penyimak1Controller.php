<?php

namespace App\Http\Controllers;
use App\DataPenyimak;
use Illuminate\Http\Request;

class Penyimak1Controller extends Controller
{

    public function penyimak()
    {
        $ustadzs = DataPenyimak::all();
        return view('sistaq.penyimak.datapenyimak', [
            'ustadzs'=>$ustadzs
        ]);
    }


    public function penyimak1()
    {
        $ustadzs = DataPenyimak::where('program','tahfidz 1')->get();
        return view('sistaq.penyimak.penyimak1.Penyimak1', [
            'ustadzs'=>$ustadzs
        ]);
    }

    public function jumlah()
    {
        $count = DataPenyimak::count();
        return View ('dashboard')->with('count', $count);
    }

    public function tambahpenyimak()
    {
        return view('sistaq.TambahPenyimak');
    }
    public function tambahdatapenyimak(Request $request)
    {
        DataPenyimak::insert(['nama_penyimak'=>$request->get("nama_penyimak"),'nip'=>$request->get("nip"),'jenis_kelamin'=>$request->get("jenis_kelamin"),'alamat'=>$request->get('alamat'),'no_hp'=>$request->get('no_hp'),'program'=>$request->get('program'),'foto'=>$request->get('foto'),'username'=>$request->get('username'),'password'=>$request->get('password')]);

        return redirect('/dashboard');
        // echo 'Data Berhasil di tambahkan';

    }

    // delete penyimak

    public function deletepenyimak1($id)
    {
        DataPenyimak::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('penyimak1');
    }

    // edit
    public function edit1($id)
    {
        $editdata = DataPenyimak::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.penyimak.penyimak1.EditPenyimak1', array(
            'editdata' => $editdata
        ));
    }
    public function editpenyimak1(Request $request)
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
          return redirect()->route('penyimak1');
        // echo 'data berhasil di edit';
    }
}
