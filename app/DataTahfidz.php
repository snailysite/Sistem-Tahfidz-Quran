<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTahfidz extends Model
{
    protected $table = 'data_tahfidz';

    public function santri()
    {
        return $this->belongsTo(DataSantri::class);
    }
}
