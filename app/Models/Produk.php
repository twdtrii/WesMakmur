<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

     protected $table = 'produk';
     protected $guarded = ['id'];


     // protected $primarykey = 'id_siswa';

    //protected $fillable = [
        //'nis',
        //'nama',
        //'alamat'
    //];



}
