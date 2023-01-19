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
        Schema::create('health_content', function (Blueprint $table) {
            $table->id();
            $table->date("hcDate")->nullable();
            $table->string('hcName')->unique();
            $table->string('hcArticle');
            $table->string('hcAuthor');
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
