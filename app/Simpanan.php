<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Simpanan extends Model
{
    use SoftDeletes;
    protected $fillable = ['member_id', 'nama_admin', 'nama_anggota', 'jumlah_simpanan', 'tanggal_simpanan'];
}
