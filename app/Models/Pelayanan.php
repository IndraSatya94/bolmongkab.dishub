<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanan';
    use HasFactory;
  
    protected $fillable = [
        'posisi','nama', 'link', 'icon'
    ];
}
