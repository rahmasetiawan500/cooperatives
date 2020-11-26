<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pinjaman extends Model
{
    //
    use SoftDeletes;

    protected $fillable = ['member_id', 'nama_anggota', 'nama_admin', 'alasan_pinjaman', 'nilai_pinjaman', 'tanggal_pinjaman', 'lama_pinjaman'];
}
