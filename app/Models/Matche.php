<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;

    protected $fillable = [
        'zvire_jedno_id',
        'zvire_dva_id',
    ];

    public function zvireJedno()
    {
        return $this->belongsTo(Zvire::class, 'zvire_jedno_id');
    }

    public function zvireDva()
    {
        return $this->belongsTo(Zvire::class, 'zvire_dva_id');
    }
}
