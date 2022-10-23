<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'permintaan_id',
        'tanggapan',
        'user_id',
    ];

    public function permitaan()
    {
        return $this->belongsTo(Permintaan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
