<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agama;
use App\Models\JenisKelamin;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Eselon;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $table = 'pegawais';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nip', 'like', '%' . $search . '%')
                        ->orWhere('nama', 'like', '%' . $search . '%');
        });
        
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function jenis_kelamin()
    {
        return $this->belongsTo(JenisKelamin::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class);
    }

    public function eselon()
    {
        return $this->belongsTo(Eselon::class);
    }
}
