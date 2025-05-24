<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
        });

        Schema::create('estatus', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
        });

        Schema::create('semestre', function (Blueprint $table) {
            $table->id();
            $table->integer('semestre', false, true);
        });

        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->string('calle', 128);
            $table->integer('num_ext');
            $table->integer('num_int');
            $table->string('alcaldia', 128);
            $table->string('cp', 128);
        });

        Schema::create('carrera', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
        });

        Schema::create('materia', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
            $table->string('codigo', 128);
            $table->integer('credito');
            $table->foreignId('id_carrera')->nullable()->constrained('carrera');
            $table->foreignId('id_semestre')->nullable()->constrained('semestre');
        });

        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
            $table->string('ap_pat', 128);
            $table->string('ap_mat', 128)->nullable();
            $table->string('telefono', 128);
            $table->string('pass', 256);
            $table->foreignId('id_rol')->constrained('rol');
            $table->foreignId('id_direccion')->constrained('direccion');
            $table->foreignId('id_semestre')->constrained('semestre');
        });

        Schema::create('historico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuario');
            $table->foreignId('id_materia')->constrained('materia');
            $table->foreignId('id_estatus')->constrained('estatus');
        });

        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->binary('archivo');
        });

        Schema::create('hora', function (Blueprint $table) {
            $table->id();
            $table->integer('hora');
        });

        Schema::create('horario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hora')->constrained('hora');
            $table->foreignId('id_materia')->constrained('materia');
        });

        Schema::create('grupo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 128);
        });

        Schema::create('grupo_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_grupo')->constrained('grupo');
            $table->foreignId('id_usuario')->constrained('usuario');
        });

        Schema::create('grupo_horario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_grupo')->constrained('grupo');
            $table->foreignId('id_horario')->constrained('horario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('grupo_horario');
        Schema::dropIfExists('grupo_usuario');
        Schema::dropIfExists('grupo');
        Schema::dropIfExists('horario');
        Schema::dropIfExists('hora');
        Schema::dropIfExists('archivos');
        Schema::dropIfExists('historico');
        Schema::dropIfExists('usuario');
        Schema::dropIfExists('materia');
        Schema::dropIfExists('carrera');
        Schema::dropIfExists('direccion');
        Schema::dropIfExists('semestre');
        Schema::dropIfExists('estatus');
        Schema::dropIfExists('rol');
    }
};
