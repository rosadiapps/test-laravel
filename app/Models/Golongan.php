<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'golongans';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
