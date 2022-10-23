<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'program',
        'keterangan',
        'user',
        'pass',
        'status',
        'pemohon_id'
    ];

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class);
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class);
    }
}
