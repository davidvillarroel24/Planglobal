<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fatek extends Model
{
    protected $table = 'fateks';
    public $timestamps = false;

    protected $fillable = ['nombre', 'estado'];

    public function carreras()
    {
        return $this->hasMany(Carrera::class, 'id_fateks');
    }
}