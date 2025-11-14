<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'posouvajici_id',
        'posunuty_id',
        'libi_se',
    ];

    public function posouvajici()
    {
        return $this->belongsTo(Zvire::class, 'posouvajici_id');
    }

    public function posunuty()
    {
        return $this->belongsTo(Zvire::class, 'posunuty_id');
    }
}
