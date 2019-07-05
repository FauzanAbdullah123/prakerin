<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['kelas', 'walikelas', 'nama_siswa', 'jurusan', 'no_tlp'];
    public $timetamps = true;
}
