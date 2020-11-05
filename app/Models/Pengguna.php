<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;

class Pengguna extends User
{
    use HasFactory, Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'no_kad_pengenalan';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];

    public function getEmailAttribute($value)
    {
        return $this->attributes['emel'];
    }

    public function getPasswordAttribute($value)
    {
        return $this->attributes['kata_laluan'];
    }

    public function bahagian()
    {
        return $this->belongsTo(Bahagian::class, 'id_bahagian', 'id')->withDefault();
    }
}
