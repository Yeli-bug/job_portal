<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Una migración es una manera de modificar la estructura
     *  de la base de datos (agregar o quitar columnas, crear 
     * o eliminar tablas, etc.) de forma programática y controlada.
     */
    public function up(): void
    {
        Schema::table('job', function (Blueprint $table) {
        //    $table->integer('status')->default(1)->after('company_website');
        //    $table->integer('isFeatured')->after('status')->default(0);
              $table->foreignId('user_id')->after('job_type_id')->constrained()->onDelete('cascade');   
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job', function (Blueprint $table) {
         //   $table->dropColumn('status');
         //   $table->dropColumn('isFeatured');
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
