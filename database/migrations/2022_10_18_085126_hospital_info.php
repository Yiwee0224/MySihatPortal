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
        Schema::create('hospital_info', function (Blueprint $table) {
            $table->id();
            $table->integer('cContactNumber');
            $table->string('hName')->unique();
            $table->string('hLocation');
            $table->integer('hNumber');
            $table->string('hInfo');
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
