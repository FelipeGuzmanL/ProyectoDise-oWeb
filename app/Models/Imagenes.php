<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;

    protected $table = 'imagenes';

    public function publicacion(){
        return $this->hasOne(Publicaciones::class, 'id_imagen');
    }
}
