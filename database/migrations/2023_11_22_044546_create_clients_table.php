<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('clients');
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('lastName', 50);
            $table->string('firstName', 50);
            $table->string('email');
            $table->timestamps();
            $table->softDeletes(); 
          
        });
    }
    
   

    /**
     * Reverse the migrations.
     */
    
  
};
