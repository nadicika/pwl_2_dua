<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $table='kelas';

    public function mahasiswas() {
        return $this->hasMany(MahasiswaModel::class);
    }
}
