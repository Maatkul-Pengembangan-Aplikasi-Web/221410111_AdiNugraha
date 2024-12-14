<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'npm',
        'nama_prodi',
        'foto',
        
    ];
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

}
