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
        'user_id'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
