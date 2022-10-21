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
        'bidang_id',
        'alamat',
        'no_hp',
        'jk',
        'email',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
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
