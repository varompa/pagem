<?php

// app/Models/Pengguna.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id_pengguna', 'nama_pengguna', 'alamat_pengguna', 'no_telepon_pengguna', 'email', 'role'];
}

