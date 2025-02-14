<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun'; // Nama tabel di database
    protected $fillable = ['username', 'password']; // Kolom yang boleh diisi
}
