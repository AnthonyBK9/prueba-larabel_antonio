<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\GrupoAcademico;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $grupos_academicos = new GrupoAcademico();
        Schema::create($grupos_academicos->getTable(), function (Blueprint $table) {
            $grupos_academicos = new GrupoAcademico();
            $table->bigIncrements('id_grupo_academico');
            $table->string('periodo_id');
            $table->string('materia_id');
            $table->string('clave_curso');
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
