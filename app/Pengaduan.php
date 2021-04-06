<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = 'id';
    protected $fillable = ['nik', 'judul', 'tgl_aduan', 'aduan', 'foto', 'status'];

    public function masyarakat()
    {
        return $this->belongsTo('App\Masyarakat', 'nik', 'nik');
    }
    public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan', 'id', 'pengaduan_id');
    }
}
