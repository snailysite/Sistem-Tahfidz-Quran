<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPresensi extends Model
{
    protected $table = 'data_presensi';

    public function santri()
    {
        return $this->belongsTo(DataSantri::class);
    }
}
