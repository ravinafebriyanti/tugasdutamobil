<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
   protected $primaryKey='kode_mobil';
   public $table='mobil';
   protected $casts = [
      'kode_mobil' => 'string',
   ];
   protected $fillable=[
            'kode_mobil','merk','type','warna','harga_mobil','gambar'
   ];
}
