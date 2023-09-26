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
       Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('rating', 4, 2);
            $table->string('genres');
            $table->date('releaseDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(){
          Schema::dropIfExists('tvshows');
        
    }
  
    
        //
};