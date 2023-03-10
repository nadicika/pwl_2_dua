<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'kodeMk';
    protected $keyType = 'string';
}
