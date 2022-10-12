<?php

namespace App\Http\Controllers;
use App\DataPresensi;
use App\DataSantri;
use Illuminate\Http\Request;
use PDF;

class SistaqController extends Controller
{
    public function santri()
    {
        $santri = DataSantri::all();
        return view('sistaq.santri.datasantri', [
            'santri'=>$santri
        ]);
        // return view('sistaq.santri.datasantri', [


    }

    public function index()
    {
        $santri = DataSantri::where('program','tahfidz 1')->get();
        return view('sistaq.santri.tahfidz1.SantriTahfidz1', [
            'santri'=>$santri
        ]);
    }

    // presensi

    public function presensi1()
    {
        $santri = DataSantri::where('program','tahfidz 1')->get();
        return view('sistaq.santri.tahfidz1.PresensiTahfidz1', [
            'santri'=>$santri
        ]);
    }

    public function beranda()
    {
        $santri = DataSantri::latest()->paginate(10);

        //render view with posts
        return view('sistaq.dashboard', compact('santri'));
        // return view('sistaq.dashboard');
    }

    public function tambahsantri()
    {
        return view('sistaq.TambahSantri');
    }

    public function tambahdata(Request $request)
    {
        DataSantri::insert(['nama_santri'=>$request->get("nama_santri"),
        'nisn'=>$request->get("nisn"),
        'tempat_lahir'=>$request->get("tempat_lahir"),
        'tgl_lahir'=>$request->get("tgl_lahir"),
        'jenis_kelamin'=>$request->get("jenis_kelamin"),
        'nama_ortu'=>$request->get('nama_ortu'),
        'alamat'=>$request->get('alamat'),
        'no_hp'=>$request->get('no_hp'),
        'program'=>$request->get('program'),
        'foto'=>$request->file('foto')->store('post-images'),
        'username'=>$request->get('username'),
        'password'=>$request->get('password')]);

        return redirect('/dashboard');
        // echo 'Data Berhasil di tambahkan';

    }

    // delete santri

    public function deletesantri($id)
    {
        DataSantri::where('id',$id)->delete();
        // return redirect('');
        return redirect()->route('tahfidz1');
    }

    // edit
    public function edit($id)
    {
        $output = 'Edit Data Mahasiswa';
        $editdata = DataSantri::where('id',$id)->first();

        // echo "blaa blaaa";
        return View('sistaq.santri.tahfidz1.EditSantri', array(
            'content' => $output,
            'editdata' => $editdata
        ));
    }
    public function editdata(Request $request)
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

          return redirect()->route('tahfidz1');
        // echo 'data berhasil di edit';
    }

    public function view1($id)
    {
        $santri = DataSantri::where('id',$id)->first();
        return view('sistaq.santri.raport', array(
            'santri'=>$santri
        ));
        // return view('sistaq.santri.tahfidz1.ViewSantri1');
    }

    public function jumlah()
    {
        $count = DataSantri::count();
        return View ('dashboard')->with('count', $count);
    }

    // user (penyimak tahfidz)

    public function absensi1()
    {
        $santri = DataSantri::where('program','tahfidz 1')->get();
        return view('sistaq.santri.tahfidz1.AbsensiTahfidz1', [
            'santri'=>$santri
        ]);
    }

    public function absensitahfidz1(Request $request)
    {
        DataPresensi::with('data_santri')->insert(['tanggal'=>$request->get('tanggal'),
        'absensi'=>$request->get('absensi'),
        'santri_id'=>$request->get('id')]);

        echo 'absensi berahasil';
    }


    // login

    public function login()
    {
        return view('login');
    }


    // print
    public function printkode1($id)
    {
        $santri = DataSantri::where('id',$id)->first();
        return view('sistaq.santri.tahfidz1.print', array(
            'santri'=>$santri
        ));
    }


        // edit
    public function editsetoran($id)
    {
        $output = 'Edit Data Tahfidz';
        $editdata = DataSantri::where('id',$id)->first();

         // echo "blaa blaaa";
        return View('sistaq.santri.tahfidz1.editSetoran', array(
            'content' => $output,
            'editdata' => $editdata
        ));
    }
    public function laporan()
    {

        return view('sistaq.Raport');
    }


}



