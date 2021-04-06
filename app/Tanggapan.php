<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey = 'id';
    protected $fillable = ['pengaduan_id', 'petugas_nik', 'tgl_tanggapan', 'tanggapan'];

    public function pengaduan()
    {
        return $this->hasOne('App\Pengaduan', 'id', 'pengaduan_id');
    }
    public function petugas()
    {
        return $this->hasOne('App\Petugas', 'nik', 'petugas_nik');
    }
}
