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
        Schema::create('notas', function (Blueprint $tabla){

            $tabla->id();
            $tabla->string('titulo',255);
            $tabla->string('descripcion',255)->nullable();
            $tabla->timestamps();
            } 
        );
        


        
    
    
    
    
    
    
    
    
    
    
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
