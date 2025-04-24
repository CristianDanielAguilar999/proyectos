<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'documento',
        'tipo_documento',
        'telefono',
        'direccion'
    ];

    public function getFullNameAttribute()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
