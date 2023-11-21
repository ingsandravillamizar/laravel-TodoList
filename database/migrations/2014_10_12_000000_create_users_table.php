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
        Schema::create('users', function (Blueprint $table) {
            $table->id();  //integer, unsigned, increment  : AUTONUMERICO
            $table->string('name'); //varchar
            $table->string('email')->unique();   //varchar UNICO
            $table->timestamp('email_verified_at')->nullable();  //acepta nulos no es obligatorio
            $table->string('password'); 
            $table->rememberToken();
            $table->timestamps();  //crea dos campos para creacion y actualizacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
