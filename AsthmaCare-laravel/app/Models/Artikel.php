<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->judul);
        });

        static::updating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->judul);
        });
    }


    // Gunakan slug sebagai route key
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
