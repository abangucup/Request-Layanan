<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'bidang',
        'deskripsi'
    ];

    public function user()
    {
        $this->hasMany(User::class);
    }
}
