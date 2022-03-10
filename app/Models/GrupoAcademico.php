<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoAcademico extends Model
{
    use HasFactory; 
    //Gurpos academicos
    protected $table = 'ce200_grupos_academicos';
    protected $primaryKey = 'id_grupo_academico';
}
