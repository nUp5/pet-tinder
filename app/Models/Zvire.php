<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Swipe;
use App\Models\Matche;

class Zvire extends Model
{
    use HasFactory;

    protected $table = 'zvirata';

    protected $fillable = [
        'jmeno',
        'druh',
        'vek',
        'plemeno',
        'popis',
        'cesta_k_obrazku',
    ];

    public function odeslaneSwipy()
    {
        return $this->hasMany(Swipe::class, 'posouvajici_id');
    }

    public function prijateSwipy()
    {
        return $this->hasMany(Swipe::class, 'posunuty_id');
    }

    public function matches()
    {
       return $this->hasMany(Matche::class, 'zvire_jedno_id')
            ->orWhere('zvire_dva_id', $this->id);

    }
}
