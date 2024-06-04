<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = "kelurahans"; //nama table yang digunakan

    protected $fillable =[
        'nama',
        'kecamatan_id'
    ];
    // non  aktifin timestamps
    public $timestamps = false;
}
