<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $primaryKey = 'id';
    use HasFactory;
  
    protected $fillable = [
        'nama'
    ];
//     public function pimpinan()
//     {
//         return $this->hasOne(Pimpinan::class);

//    }
}
