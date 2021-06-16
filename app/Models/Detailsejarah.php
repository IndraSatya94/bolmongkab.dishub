<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailsejarah extends Model
{
    protected $table = 'detailsejarah';
    use HasFactory;

    protected $fillable = [
        'nama','body'
    ];
}
