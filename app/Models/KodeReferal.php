<?php

// app/Models/KodeReferal.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeReferal extends Model
{
    use HasFactory;

    protected $table = 'kode_referal';
    protected $primaryKey = 'id_kodereferal';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_kodereferal', 'tanggal_dibuat', 'tanggal_dipakai'
    ];
}
