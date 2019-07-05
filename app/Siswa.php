<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama', 'nis', 'kelas', 'jurusan', 'alamat'];
    public $timetamps = true;
}
