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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('contact');
            $table->string('place');
            $table->string('amount');
            $table->string('years'); 
            $table->string('receivedamount');
            $table->string('receipt')->default('pending');
            $table->string('currentdate'); 
            $table->string('receiveddate');  
            $table->string('status')-> default('pending'); 
            $table->string('userid'); 
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
