<?php

// app/Models/Supplier.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $primaryKey = 'id_supplier';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_supplier', 'nama_supplier', 'alamat_supplier', 
        'no_telepon_supplier', 'email'
    ];
}

