<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('pID');
            $table->date("pDate")();
            $table->integer('pAmount');
            $table->string('pMethod');
            // $table->string('pDetail');php
        });



        DB::table('payment')->insert([
            ['pAmount' => '100', 'pMethod' => 'Cash'],
            ['pAmount' => '200', 'pMethod' => 'Online Banking'],
            ['pAmount' => '300', 'pMethod' => 'Cash'],
            ['pAmount' => '400', 'pMethod' => 'Online Banking'],
            ['pAmount' => '500', 'pMethod' => 'Online Banking'],
        ]);
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
