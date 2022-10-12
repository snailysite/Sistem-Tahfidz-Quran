<?php

namespace App\Imports;

use App\DataSantriExcel;
use Maatwebsite\Excel\Concerns\ToModel;

class SantriImport implements DataSantriExcel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new DataSantriExcel([
    //         //row
    //             'id'                => $row[0],
    //             'nama_santri'       => $row[1],
    //             'nisn'              => $row[2],
    //             'tempat_lahir'      => $row[3],
    //             'tanggal_lahir'     => $row[4],
    //             'jenis_kelamin'     => $row[5],
    //             'nama_ortu'         => $row[6],
    //             'no_hp'             => $row[7],
    //             'foto'              => $row[8],
    //             'alamat'            => $row[9],
    //             'program'           => $row[10],
    //             'username'          => $row[11],
    //             'password'          => $row[12],
    //     ]);
    // }

    public function import(Request $request){



}
