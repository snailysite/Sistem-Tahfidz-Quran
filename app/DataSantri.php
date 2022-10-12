<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSantri extends Model
{
    protected $table = 'data_santri';

    // public function presensi()
    // {
    //     return $this->hasMany(DataPresensi::class);
    // }

    // public function tahfidz()
    // {
    //     return $this->hasmany(DataTahfidz::class);
    // }

    //  /**
    // * @param array $row
    // *
    // * @return \Illuminate\Database\Eloquent\Model|null
    // */

    // public function model(array $row)
    // {
    //     return new DataSantri([
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
}
