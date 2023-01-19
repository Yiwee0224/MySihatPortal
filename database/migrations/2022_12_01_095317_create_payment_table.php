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
            $table->increments('payID')->unique();
            $table->timestamps();
            $table->string('payName');
            $table->date('payDate');
            $table->integer('payAmount');
            $table->unsignedInteger('userID');
            $table->foreign('userID')->references('userID')->on('users');
        });

        DB::table('payment')->insert([
            ['userID' => '1', 'payName' => 'DNA test ', 'payDate' => '2019-02-03', 'payAmount' => '2300'],
            ['userID' => '2', 'payName' => 'Health Screening', 'payDate' => '2019-03-13', 'payAmount' => '388'],
            ['userID' => '3', 'payName' => 'Allergy test', 'payDate' => '2019-04-23',  'payAmount' => '557'],
            ['userID' => '4', 'payName' => 'Cardia test', 'payDate' => '2019-04-21',  'payAmount' => '1000'],
            ['userID' => '5', 'payName' => 'Pre-U Screening', 'payDate' => '2019-04-22', 'payAmount' => '130'],
            ['userID' => '6', 'payName' => 'Pre Maritial Screening', 'payDate' => '2019-04-21', 'payAmount' => '700'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
};
