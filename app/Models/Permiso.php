<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos';

    public function getRoles()
    {
        return $this->belongsToMany(Rol::class, 'roles_has_permisos', 'id_rol', 'id');
    }
}
