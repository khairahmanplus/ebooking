<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    public $timestamps = false;

    protected $guarded = [];

    public function bahagian()
    {
        return $this->belongsTo(Bahagian::class, 'id_bahagian', 'id')->withDefault();
    }
}
