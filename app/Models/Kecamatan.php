<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    Protected $table = 'kecamatan';
    use HasFactory;

    protected $fillable = [
        'nama', 'link'
    ];
}
