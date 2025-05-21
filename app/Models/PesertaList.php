<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaList extends Model
{
    use HasFactory;

    protected $table = 'peserta_daftar';

    protected $fillable = [
        'nama_peserta', 'nim', 'fakultas', 'email', 'no_hp',
    ];
}
