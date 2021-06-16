<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    protected $table = 'pimpinan';
    use HasFactory;

    protected $fillable = [
        'nama','jabatan','image','body','linkedin','twitter','facebook','instagram'
    ];

//     public function jabatan()
//     {
//         return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id');

//    }
}
