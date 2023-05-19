<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id',
        'foto'
    ];

    public function kelas() {
        return $this->belongsTo(KelasModel::class);
    }

    public function nilai_khs(){
        return $this->belongsTo(NilaiKhsModel::class);
    }

}
