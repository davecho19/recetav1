<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'nombre', 'ingredientes', 'preparacion', 'imagen', 'categoria_id'
    ];


    public function categoriaReceta(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    // OBTENEMOS LA RECETA DESDE  FK

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id'); // FK de esta tabla
    }
}
