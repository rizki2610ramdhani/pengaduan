<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
{
    use Notifiable;

    protected $guard = 'petugas';
    protected $table = 'petugas';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp', 'level'];
    public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan', 'pengaduan_nik', 'nik');
    }
}
