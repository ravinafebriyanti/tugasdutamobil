<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beli_cash extends Model
{
    use HasFactory;
    protected $table ="beli_cash";
    public $incrementing = false;
    protected $primaryKey = 'kode_cash';

    protected $casts =[
        'kode_cash' => 'string',
    ];
    protected $fillable = ['kode_cash','ktp_pembeli','kode_mobil'];
}
