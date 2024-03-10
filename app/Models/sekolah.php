<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';
    protected $guarded = ['id'];

    function siswa(){
        return $this->hasMany(Produk::class);
    }
}
