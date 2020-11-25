<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pinjam extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_peminjam', 'nilai_pinjam', 'nama_admin', 'tanggal_pinjam', 'alasan_pinjam'];
}
