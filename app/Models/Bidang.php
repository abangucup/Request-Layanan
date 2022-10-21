<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $fillable =
    [
    'bidang',
    'jabatan',
    'opd_id'
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
        
    }

    public function pemohon()
    {
        return $this->hasMany(Pemohon::class);
    }
}
