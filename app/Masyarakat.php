<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use Notifiable;

    protected $guard = 'masyarakat';
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp'];

    public function pengaduan()
    {
        return $this->hasMany('App\Pengaduan', 'nik', 'nik');
    }
}
