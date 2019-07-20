<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['foto', 'judul', 'tempat', 'tanggal'];
    public $timestamps = true;
}
