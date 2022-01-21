<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';

    public function getPermisos()
    {
        return $this->belongsToMany(Permiso::class, 'roles_has_permisos', 'id_permiso', 'id');
    }
}
