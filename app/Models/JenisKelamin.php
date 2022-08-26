<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class JenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamins';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
