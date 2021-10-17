<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    public $primarykey='ktp_pembeli';
    protected $table='pembeli';
    // protected $casts = [
    //    'ko' => 'string',
    // ];
    protected $fillable=[
             'ktp_pembeli','nama_pembeli','alamat_pembeli','telp_pembeli'
    ];
}
