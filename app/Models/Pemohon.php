<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;

    protected $fillable =
    [

        'profile',
        'nama',
        'username',
        'password',
        'opd_id',
        'alamat',
        'jabatan',
        'no_hp',
        'jk',
        'email',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function permintaan()
    {
        return $this->hasMany(Permintaan::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
