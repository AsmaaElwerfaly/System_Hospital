<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('age');
            $table->string('address');
            $table->string('family');
            $table->string('job');
            $table->bigInteger('sections_id')->unsigned();
            $table->foreign('sections_id')->references('id')->on('sections');
            $table->integer('phone');
            $table->integer('idcard');
            $table->date('dateofentry');
            $table->date('exitdate')->nullable();
            $table->string('maritalstatus');
            $table->string('note')->nullable();
            $table->string('Gender');
            $table->string('user');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
