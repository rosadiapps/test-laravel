<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Agama extends Model
{
    use HasFactory;

    protected $table = 'agamas';
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
