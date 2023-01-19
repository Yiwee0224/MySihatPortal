<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_assistant', function (Blueprint $table) {
            $table->id();
            $table->integer('maContactNumber');
            $table->string('maName')->unique();
            $table->string('cEmail')->unique();
            $table->integer('cAge');
            $table->string('cGender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
