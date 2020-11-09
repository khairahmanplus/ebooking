<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $guarded = [];

    public function senaraiButiranAcara()
    {
        return $this->hasMany(ButiranAcara::class, 'id_acara', 'id');
    }
}
