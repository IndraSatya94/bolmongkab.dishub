<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinasdetail extends Model
{
    protected $table = 'dinasdetail';
    protected $primaryKey = 'id';
    use HasFactory;

    protected $fillable = [
        'dinas','pimpinan','jabatan','alamat','telp','website','email','image' ];
}
