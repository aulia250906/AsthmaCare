<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilTes extends Model
{
    protected $table = 'hasil_tes';

    protected $fillable = [
        'user_id',
        'tanggal_tes',
        'resiko',
        'narasi',
        'score',
        'raw_response',
    ];

    protected $casts = [
        'tanggal_tes' => 'datetime',
        'raw_response' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
