<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilik extends Model
{
    use HasFactory;

    protected $table = 'bilik';
    protected $guarded = [];

    public function bahagian()
    {
        return $this->belongsTo(Bahagian::class, 'id_bahagian', 'id');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'no_kad_pengenalan');
    }
}
