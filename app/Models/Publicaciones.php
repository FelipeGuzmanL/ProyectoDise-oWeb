<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;

    protected $table = 'publicacion';

    protected $fillable = [
        'id_imagen',
        'titulo',
        'descripcion',
    ];

    public function imagen(){
        return $this->belongsTo(Imagenes::class, 'id_imagen');
    }
}
