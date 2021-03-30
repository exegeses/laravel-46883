<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'idProducto';
    public $timestamps = false;
    #####################
    ### métodos de relaciones
    public function relMarca()
    {
        return $this->belongsTo(
                    Marca::class,
                    'idMarca',
                    'idMarca'
                );
    }

    public function relCategoria()
    {
        return $this->belongsTo(
                    Categoria::class,
                    'idCategoria',
                    'idCategoria'
                );
    }
}
