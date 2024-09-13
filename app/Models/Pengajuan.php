<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    protected $table = 'pengajuans';
    protected $fillable = ['prodi', 'judul', 'edisi', 'penerbit', 'author', 'tahun', 'eksemplar'];
}
